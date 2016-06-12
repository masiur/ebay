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
            'title' => 'Free',
            'monthly_fee' => 0,
            'sales_limit' => 10
        ]);

        Package::create([
            'title' => 'Premium',
            'monthly_fee' => 100,
            'sales_limit' => 10000
        ]);
    }
}
