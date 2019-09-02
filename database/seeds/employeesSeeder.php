<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class employeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            [
                'name' => 'Valerii',
                'position_id' => 1,
            ],
            [
                'name' => 'Marina',
                'position_id' => 2,
            ],
            [
                'name' => 'Pavel',
                'position_id' => 3,
            ],
            [
                'name' => 'Anton',
                'position_id' => 4,
            ],
        ]);
    }
}
