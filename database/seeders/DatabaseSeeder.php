<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
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

        User::create([
            'name' => 'Muhammad Fadhil',
            'role' => 'member',
            'phone' => '081357638722',
            'identity' => '3175022809021000',
            'email' => 'mfadhilgva@gmail.com',
            'password' => Hash::make('password')
        ]);

        $skills = array("Jakarta", "Bandung", "Bali");
        foreach ($skills as $skill) {
            Skill::create([
                'name' => $skill
            ]);
        }

        $cities = array("Jakarta", "Bandung", "Bali");
        foreach ($cities as $city) {
            City::create([
                'name' => $city
            ]);
        }

        $countries = array("Indonesia", "Malaysia", "Singapura");
        foreach ($countries as $country) {
            Country::create([
                'name' => $country
            ]);
        }

        $categories = array("Electrical Help", "Minor Repairs", "Gardening", "Painting", "Cleaning Services");
        foreach ($categories as $category) {
            Category::create([
                'name' => $category
            ]);
        }
    }
}
