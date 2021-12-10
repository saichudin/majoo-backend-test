<?php

namespace App\Http\Controllers;

use App\Http\Resources\ReportMerchantMonthlyResource;
use Illuminate\Http\Request;

class ReportMerchantController extends Controller
{
    public function monthly(Request $request)
    {
        // mengambil data merchant hanya milik user yg login
        $merchants = auth()->user()
            ->merchants()
            ->paginate($request->limit ?? 10);

        $merchants->load('user');
        // menggunakan layer untuk transform API response
        return ReportMerchantMonthlyResource::collection($merchants);
    }
}
