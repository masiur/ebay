<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Subcategory;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class SubcategoriesTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        Subcategory::create([
            'name' => $faker->randomLetter,
            'category_id' => 1,
            'created_at' => $faker->date('y-m-d:H:i:s'),
            'updated_at' => $faker->date('y-m-d:H:i:s')
        ]);

        Subcategory::create([
            'name' => $faker->randomLetter,
            'category_id' => 1,
            'created_at' => $faker->date('y-m-d:H:i:s'),
            'updated_at' => $faker->date('y-m-d:H:i:s')
        ]);
    }
}
