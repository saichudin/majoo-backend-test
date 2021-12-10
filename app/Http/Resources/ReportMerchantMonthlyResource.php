<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB;

class ReportMerchantMonthlyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $month = $request->month ?? 11;

        // ambil data dari db dan simpan di collection, connect ke db hanya sekali jadi tidak membebani db
        // lalu menggunakan laravel collection utk mendapatkan data tiap date
        $omzet = $this->transactions()
            ->select(
                DB::raw('DATE_FORMAT(created_at, "%Y-%m-%d") as date'),
                DB::raw('sum(bill_total) as total')
            )
            ->whereMonth('created_at', $month)
            ->groupBy('created_at')
            ->get();

        $startDate = Carbon::parse('2021-'.$month)->startOfMonth();
        $endDate = Carbon::parse('2021-'.$month)->endOfMonth();
        $period = CarbonPeriod::create($startDate, $endDate);

        $omzetPerDate = [];
        foreach ($period as $date) {
            $omzetPerDate[] = [
                'data' => $date->toDateString(),
                // menggunakan laravel collection utk mencari data sesuai date (tanpa connect db)
                'total' => $omzet->where('date', $date->toDateString())->first()->total ?? 0,
            ];
        }

        return [
            'id' => $this->id,
            'merchant_name' => $this->merchant_name,
            'owner' => new UserResource($this->whenLoaded('user')),
            'omzet' => $omzetPerDate,
        ];
    }
}
