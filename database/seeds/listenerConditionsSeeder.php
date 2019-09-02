<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class listenerConditionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('listener_conditions')->insert([
            [
                'title' => 'Похвала',
                'condition_id' => 1,
                'criteria_id' => 1,
            ],
            [
                'title' => 'Выговор',
                'condition_id' => 4,
                'criteria_id' => 2,
            ],
        ]);
    }
}
