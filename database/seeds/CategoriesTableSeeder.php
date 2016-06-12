<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Category;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        Category::create([
            'name' => $faker->randomLetter,
            'created_at' => $faker->date('Y-m-d H:i:s'),
            'updated_at' => $faker->date('Y-m-d H:i:s')
        ]);

        Category::create([
            'name' => $faker->randomLetter,
            'created_at' => $faker->date('Y-m-d H:i:s'),
            'updated_at' => $faker->date('Y-m-d H:i:s')
        ]);
    }
}
