<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Package;

// composer require laracasts/testdummy
// use Laracasts\TestDummy\Factory as TestDummy;

class PackagesTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        Package::create([
            'title' => 'Starter',
            'price' => 200,
            'benefits' => $faker->sentence,
            'created_at' => $faker->date('Y-m-d H:i:s'),
            'updated_at' => $faker->date('Y-m-d H:i:s')
        ]);

        Package::create([
            'title' => 'Premium',
            'price' => 1500,
            'benefits' => $faker->sentence,
            'created_at' => $faker->date('Y-m-d H:i:s'),
            'updated_at' => $faker->date('Y-m-d H:i:s')
        ]);
    }
}
