<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Muhammad Fadhil',
            'role' => 'contractor',
            'phone' => '081357638723',
            'identity' => '3175022809021001',
            'email' => 'mfadhilgva12@gmail.com',
            'password' => Hash::make('password')
        ]);
    }
}
