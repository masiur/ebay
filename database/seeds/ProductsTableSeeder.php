<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Product;

// composer require laracasts/testdummy
// use Laracasts\TestDummy\Factory as TestDummy;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        Product::create([
            'name' => $faker->name,
            'price' => $faker->randomNumber(),
            'amount' => 5,
            'description' => $faker->sentence,
            'img_url' => $faker->imageUrl(),
            'seller_id' => 1,
            'shop_id' => 1,
            'product_category_id' => 1,
            'created_at' => $faker->date('Y-m-d H:i:s'),
            'updated_at' => $faker->date('Y-m-d H:i:s')
        ]);

        Product::create([
            'name' => $faker->name,
            'price' => $faker->randomNumber(),
            'amount' => 10,
            'description' => $faker->sentence,
            'img_url' => $faker->imageUrl(),
            'seller_id' => 2,
            'shop_id' => 2,
            'product_category_id' => 2,
            'created_at' => $faker->date('Y-m-d H:i:s'),
            'updated_at' => $faker->date('Y-m-d H:i:s')
        ]);
    }
}
