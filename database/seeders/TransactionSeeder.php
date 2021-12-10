<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Transaction::create([
            'merchant_id' => 1,
            'outlet_id' => 1,
            'bill_total' => 200000,
            'created_at' => '2021-11-02 09:00:00',
            'updated_at' => '2021-11-02 09:00:00',
            'created_by' => 2,
            'updated_by' => 2,
        ]);

        Transaction::create([
            'merchant_id' => 1,
            'outlet_id' => 1,
            'bill_total' => 50000,
            'created_at' => '2021-11-02 10:00:00',
            'updated_at' => '2021-11-02 10:00:00',
            'created_by' => 2,
            'updated_by' => 2,
        ]);

        Transaction::create([
            'merchant_id' => 1,
            'outlet_id' => 1,
            'bill_total' => 150000,
            'created_at' => '2021-11-05 09:00:00',
            'updated_at' => '2021-11-05 09:00:00',
            'created_by' => 2,
            'updated_by' => 2,
        ]);

        Transaction::create([
            'merchant_id' => 2,
            'outlet_id' => 2,
            'bill_total' => 500000,
            'created_at' => '2021-11-20 09:00:00',
            'updated_at' => '2021-11-20 09:00:00',
            'created_by' => 3,
            'updated_by' => 3,
        ]);
    }
}
