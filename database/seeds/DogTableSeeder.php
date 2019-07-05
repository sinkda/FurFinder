<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Dog data randomly selected from the API:  https://dog.ceo/api/breeds/image/random

        $faker = Faker\Factory::create();

        // insert some random dogs with an uneven spread over the 2 organizations
        DB::table('dogs')->insert([
            'name' => 'Fido',
            'created_at' => $faker->date().' '.$faker->time(),
            'updated_at' => $faker->date().' '.$faker->time(),
            'breed' => 'spaniel-blenheim',
            'description' => 'What a good boy!',
            'image' => 'n02086646_3233.jpg',
            'organization_id' => 1
        ]);

        DB::table('dogs')->insert([
            'name' => 'Doge',
            'created_at' => $faker->date().' '.$faker->time(),
            'updated_at' => $faker->date().' '.$faker->time(),
            'breed' => 'dingo',
            'description' => 'Such Doge',
            'image' => 'n02115641_6974.jpg',
            'organization_id' => 1
        ]);

        DB::table('dogs')->insert([
            'name' => 'Houndoom',
            'created_at' => $faker->date().' '.$faker->time(),
            'updated_at' => $faker->date().' '.$faker->time(),
            'breed' => 'saluki',
            'description' => 'Not a very aggressive dog',
            'image' => 'n02091831_5712.jpg',
            'organization_id' => 1
        ]);


        DB::table('dogs')->insert([
            'name' => 'Bidoof',
            'created_at' => $faker->date().' '.$faker->time(),
            'updated_at' => $faker->date().' '.$faker->time(),
            'breed' => 'bouvier',
            'description' => 'Easily distracted',
            'image' => 'n02106382_117.jpg',
            'organization_id' => 2
        ]);

        DB::table('dogs')->insert([
            'name' => 'Scuba',
            'created_at' => $faker->date().' '.$faker->time(),
            'updated_at' => $faker->date().' '.$faker->time(),
            'breed' => 'cattledog-australian',
            'description' => 'Loves to swim!',
            'image' => 'IMG_3668.JPG',
            'organization_id' => 2
        ]);



    }
}
