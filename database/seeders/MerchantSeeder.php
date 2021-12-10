<?php

namespace Database\Seeders;

use App\Models\Merchant;
use Illuminate\Database\Seeder;

class MerchantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Merchant::create([
            'user_id' => 2,
            'merchant_name' => 'Merchant User 1',
            'created_by' => 2,
            'updated_by' => 2,
        ]);

        Merchant::create([
            'user_id' => 3,
            'merchant_name' => 'Merchant User 2',
            'created_by' => 3,
            'updated_by' => 3,
        ]);
    }
}
