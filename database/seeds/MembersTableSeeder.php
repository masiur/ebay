<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Member;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class MembersTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        Member::create([
            'user_id' => 2,
            'name' => $faker->name,
            'address' => $faker->address,
            'phone' => $faker->phoneNumber,
            'package_id' => 1,
            'created_at' => $faker->date('Y-m-d H:i:s'),
            'updated_at' => $faker->date('Y-m-d H:i:s')
        ]);
    }
}
