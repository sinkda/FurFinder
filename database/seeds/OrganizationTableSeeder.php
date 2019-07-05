<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrganizationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        // create 2 random organizations
        DB::table('organizations')->insert([
            'name' =>  $faker->company ." ". $faker->companySuffix,
            'created_at' => $faker->date().' '.$faker->time(),
            'updated_at' => $faker->date().' '.$faker->time(),
            'description' => $faker->catchPhrase .", ". $faker->bs
        ]);

        DB::table('organizations')->insert([
            'name' =>  $faker->company ." ". $faker->companySuffix,
            'created_at' => $faker->date().' '.$faker->time(),
            'updated_at' => $faker->date().' '.$faker->time(),
            'description' => $faker->catchPhrase .", ". $faker->bs
        ]);
    }
}
