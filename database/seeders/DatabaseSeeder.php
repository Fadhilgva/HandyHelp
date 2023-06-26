<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Skill;
use App\Models\City;
use App\Models\Country;
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

        Skill::create([
            'name' => 'Gardening'
        ]);

        Skill::create([
            'name' => 'Electricity'
        ]);

        Skill::create([
            'name' => 'Builder'
        ]);

        City::create([
            'name' => 'Jakarta'
        ]);

        City::create([
            'name' => 'Bandung'
        ]);

        City::create([
            'name' => 'Bali'
        ]);

        Country::create([
            'name' => 'Indonesia'
        ]);

        Country::create([
            'name' => 'Malaysia'
        ]);

        Country::create([
            'name' => 'Singapura'
        ]);
    }
}
