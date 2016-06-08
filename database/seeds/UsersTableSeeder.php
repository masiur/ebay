<?php

use App\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Use this user for login as admin
        User::create(['username' => 'admin','email' => 'admin@infancyit.com','password' => bcrypt('a')]);
        //Use this user for login as user
        User::create(['username' => 'raabit','email' => 'raabithassan@gmail.com','password' => bcrypt('a')]);

        User::create(['username' => 'masiur','email' => 'mrsiddiki@gmail.com','password' => bcrypt('a')]);
        //creating 10 test users
        // factory(User::class,10)->create();



    }
}
