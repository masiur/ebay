<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;
use Faker\Factory as Faker;
use App\Member;
use App\Item;


class ItemTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        Item::create([
            'name' => 'Sun Glass',
            'category_id' => 1,
            'subcategory_id' => 1,
            'seller_id' => '1',
            'price' => 50.33,
            'amount_in_stock' => 5,
            'type' => 'buy',
            'img_url' => 'uploads/item/default.jpg',
            'created_at' => $faker->date('Y-m-d H:i:s'),
            'updated_at' => $faker->date('Y-m-d H:i:s')
        ]);

        Item::create([
            'name' => 'Iron',
            'category_id' => 1,
            'subcategory_id' => 2,
            'seller_id' => '1',
            'price' => 150.3,
            'amount_in_stock' => 2,
            'type' => 'quote',
            'img_url' => 'uploads/item/default.jpg',
            'created_at' => $faker->date('Y-m-d H:i:s'),
            'updated_at' => $faker->date('Y-m-d H:i:s')
        ]);
    }
}
