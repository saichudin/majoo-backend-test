<?php

namespace Database\Seeders;

use App\Models\Outlet;
use Illuminate\Database\Seeder;

class OutletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Outlet::create([
            'merchant_id' => 1,
            'outlet_name' => 'Outlet Merchant 1',
            'created_by' => 2,
            'updated_by' => 2,
        ]);

        Outlet::create([
            'merchant_id' => 2,
            'outlet_name' => 'Outlet Merchant 2',
            'created_by' => 3,
            'updated_by' => 3,
        ]);
    }
}
