<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class positionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('positions')->insert([
            [
                'name' => 'Junior',
            ],
            [
                'name' => 'HR',
            ],
            [
                'name' => 'Manager',
            ],
            [
                'name' => 'Team Lead',
            ],
        ]);
    }
}
