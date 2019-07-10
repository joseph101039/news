<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('employees')->insert(['first_name' => 'Jeremy', 'last_name' => 'Lin', 'created_at' => new Datetime, 'updated_at' => new Datetime ]);
        DB::table('employees')->insert(['first_name' => 'Derek', 'last_name' => 'Jeter', 'created_at' => new Datetime, 'updated_at' => new Datetime ]);
        DB::table('employees')->insert(['first_name' => 'Lionel', 'last_name' => 'Messi', 'created_at' => new Datetime, 'updated_at' => new Datetime ]);
        DB::table('employees')->insert(['first_name' => 'test', 'last_name' => 'test', 'created_at' => new Datetime, 'updated_at' => new Datetime ]);

    }
}
