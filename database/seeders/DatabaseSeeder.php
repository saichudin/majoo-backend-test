<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserAdminSeeder::class,
            UserSeeder::class,
            MerchantSeeder::class,
            OutletSeeder::class,
            TransactionSeeder::class,
        ]);
    }
}
