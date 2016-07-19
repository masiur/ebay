<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\ShopCategory;


class ShopCategoriesTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        ShopCategory::create([
            'name' => $faker->randomLetter,
            'created_at' => $faker->date('Y-m-d H:i:s'),
            'updated_at' => $faker->date('Y-m-d H:i:s')
        ]);

        ShopCategory::create([
            'name' => $faker->randomLetter,
            'created_at' => $faker->date('Y-m-d H:i:s'),
            'updated_at' => $faker->date('Y-m-d H:i:s')
        ]);
    }
}
