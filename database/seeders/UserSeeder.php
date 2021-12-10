<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'user1',
            'user_name' => 'user1',
            'password' => Hash::make('password'),
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        User::create([
            'name' => 'user2',
            'user_name' => 'user2',
            'password' => Hash::make('password'),
            'created_by' => 1,
            'updated_by' => 1,
        ]);
    }
}
