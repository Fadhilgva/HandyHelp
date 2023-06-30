<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\User;
use App\Models\Skill;
use App\Models\City;
use App\Models\Country;
use App\Models\Jobs;
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
            'email' => 'contractor@gmail.com',
            'password' => Hash::make('password')
        ]);

        User::create([
            'name' => 'Muhammad Fadhil',
            'role' => 'member',
            'phone' => '081357638722',
            'identity' => '3175022809021000',
            'email' => 'member@gmail.com',
            'password' => Hash::make('password')
        ]);

        // Jobs::create([
        //     'user_id' => 2,
        //     'title' => 'Benerin Pager',
        //     'slug' => 'Benerin-Pager',
        //     'detail' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
        //     'category_id' => 2,
        //     'location_id' => 1,
        //     'rate' => 50,
        //     'phone' => '081357638722',
        //     'option_two' => 2
        // ]);

        // Jobs::create([
        //     'user_id' => 2,
        //     'title' => 'Bangun Candi',
        //     'slug' => 'Bangun-Candi',
        //     'detail' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
        //     'category_id' => 1,
        //     'location_id' => 1,
        //     'rate' => 70,
        //     'phone' => '081357638722',
        //     'option_two' => 2
        // ]);

        // Jobs::create([
        //     'user_id' => 2,
        //     'title' => 'Buat Kandang Transformer',
        //     'slug' => 'Buat-Kandang-Transformer',
        //     'detail' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
        //     'category_id' => 5,
        //     'location_id' => 2,
        //     'rate' => 100,
        //     'phone' => '081357638722',
        //     'option_two' => 5
        // ]);

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

        // $categories = array("Electrical Help", "Minor Repairs", "Gardening", "Painting", "Cleaning Services");
        // $categorieslug = array("Electrical-Help", "Minor-Repairs", "Gardening", "Painting", "Cleaning-Services");
        // foreach ($categories as $category) {
        //     Category::create([
        //         'name' => $category
        //     ]);
        // }

        Category::create([
            'name' => "Electrical Help",
            'slug' => "Electrical-Help"
        ]);
        Category::create([
            'name' => "Minor Repairs",
            'slug' => "Minor-Repairs"
        ]);
        Category::create([
            'name' => "Gardening",
            'slug' => "Gardening"
        ]);
        Category::create([
            'name' => "Painting",
            'slug' => "Painting"
        ]);
        Category::create([
            'name' => "Cleaning Services",
            'slug' => "Cleaning-Services"
        ]);
    }
}
