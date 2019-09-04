<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ConditionEmployee extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('condition_employees')->insert([
            'employee_id' => 4,
            'condition_ud' => 1
        ]);
    }
}
