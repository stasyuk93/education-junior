<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class listenerEmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('listener_employees')->insert([
            [
                'listener_condition_id' => 2,
                'who_listen' => 2,
                'whom_listen' => 4,
            ],
            [
                'listener_condition_id' => 1,
                'who_listen' => 3,
                'whom_listen' => 4,
            ],

        ]);
    }
}
