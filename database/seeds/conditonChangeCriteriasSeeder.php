<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class conditonChangeCriteriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('condition_change_criterias')->insert([
            [
                'condition_id' => 1,
                'change_condition_id' => 1,
                'criteria_id' => 1,
            ],
            [
                'condition_id' => 2,
                'change_condition_id' => 1,
                'criteria_id' => 1,
            ],
            [
                'condition_id' => 3,
                'change_condition_id' => 2,
                'criteria_id' => 1,
            ],
            [
                'condition_id' => 4,
                'change_condition_id' => 3,
                'criteria_id' => 1,
            ],

            [
                'condition_id' => 1,
                'change_condition_id' => 2,
                'criteria_id' => 2,
            ],
            [
                'condition_id' => 2,
                'change_condition_id' => 3,
                'criteria_id' => 2,
            ],
            [
                'condition_id' => 3,
                'change_condition_id' => 4,
                'criteria_id' => 2,
            ],
            [
                'condition_id' => 4,
                'change_condition_id' => 4,
                'criteria_id' => 2,
            ],
        ]);
    }
}
