<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // get some fake information for us to use
        $faker = Faker\Factory::create();

        // insert our admin user
        DB::table('users')->insert([
            'name' => $faker->unique()->firstName,
            'username' => 'admin',
            'email' => $faker->unique()->email,
            'password' => bcrypt('admin'),
            'permissions' => 1, // 1 == site admin
        ]);

        // insert 2 different rescue organizations
        DB::table('users')->insert([
            'name' => $faker->unique()->firstNameFemale,
            'username' => $faker->unique()->userName,
            'email' => $faker->unique()->email,
            'password' => bcrypt('password'),
            'permissions' => 2, // 2 == organization user
        ]);

        DB::table('users')->insert([
            'name' => $faker->unique()->firstNameMale,
            'username' => $faker->unique()->userName,
            'email' => $faker->unique()->email,
            'password' => bcrypt('password'),
            'permissions' => 2, // 2 == organization user
        ]);

    }
}
