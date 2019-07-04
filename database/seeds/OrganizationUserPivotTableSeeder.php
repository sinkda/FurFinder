<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrganizationUserPivotTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // admin belongs to org 1
        DB::table('organization_user')->insert([
            'organization_id' => 1,
            'user_id' => 1
        ]);

        // user 2 belongs to orgs 2
        DB::table('organization_user')->insert([
            'organization_id' => 2,
            'user_id' => 2
        ]);

        // user 3 bvelongs to orgs 1 and 2
        DB::table('organization_user')->insert([
            'organization_id' => 1,
            'user_id' => 3
        ]);
        DB::table('organization_user')->insert([
            'organization_id' => 2,
            'user_id' => 3
        ]);
    }
}
