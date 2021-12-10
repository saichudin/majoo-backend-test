<?php

namespace App\Http\Controllers;

use App\Http\Resources\ReportMerchantMonthlyResource;
use App\Http\Resources\ReportOutletMonthlyResource;
use Illuminate\Http\Request;

class ReportOutletController extends Controller
{
    public function monthly(Request $request)
    {
        // mengambil data outlet hanya milik user yg login
        $outlets = auth()->user()
            ->outlets()
            ->paginate($request->limit ?? 10);

        $outlets->load('merchant.user');

        // menggunakan layer untuk transform API response
        return ReportOutletMonthlyResource::collection($outlets);
    }
}
