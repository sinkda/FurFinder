<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UserTableSeeder::class);
         $this->call(OrganizationTableSeeder::class);
         $this->call(OrganizationUserPivotTableSeeder::class);
         $this->call(DogBreedTableSeeder::class);
         $this->call(DogTableSeeder::class);
    }
}
