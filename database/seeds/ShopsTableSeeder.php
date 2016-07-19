<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Shop;

// composer require laracasts/testdummy
// use Laracasts\TestDummy\Factory as TestDummy;

class ShopsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        Shop::create([
            'name' => $faker->name,
            'about' => $faker->sentence,
            'address' => $faker->address,
            'img_url' => $faker->imageUrl(),
            'shop_category_id' => 1,
            'seller_id' => 1,
            'created_at' => $faker->date('Y-m-d H:i:s'),
            'updated_at' => $faker->date('Y-m-d H:i:s')
        ]);

        Shop::create([
            'name' => $faker->name,
            'about' => $faker->sentence,
            'address' => $faker->address,
            'img_url' => $faker->imageUrl(),
            'shop_category_id' => 1,
            'seller_id' => 2,
            'created_at' => $faker->date('Y-m-d H:i:s'),
            'updated_at' => $faker->date('Y-m-d H:i:s')
        ]);
    }
}
