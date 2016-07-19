<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\ProductCategory;


class ProductCategoriesTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        ProductCategory::create([
            'name' => $faker->randomLetter,
            'created_at' => $faker->date('Y-m-d H:i:s'),
            'updated_at' => $faker->date('Y-m-d H:i:s')
        ]);

        ProductCategory::create([
            'name' => $faker->randomLetter,
            'created_at' => $faker->date('Y-m-d H:i:s'),
            'updated_at' => $faker->date('Y-m-d H:i:s')
        ]);
    }
}
