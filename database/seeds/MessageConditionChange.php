<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MessageConditionChange extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('message_condition_changes')->insert([
            [
                'text' => 'Молодец, отлично выполнил работу, хвалю!',
                'condition_change_criteria_id' => 1
            ],
            [
                'text' => 'Отлично выполнил работу',
                'condition_change_criteria_id' => 2
            ],
            [
                'text' => 'Правильно',
                'condition_change_criteria_id' => 3
            ],
            [
                'text' => 'Правильно',
                'condition_change_criteria_id' => 4
            ],
            [
                'text' => 'Есть ошибки, исправь, пожалуйста',
                'condition_change_criteria_id' => 5
            ],
            [
                'text' => 'Есть ошибки, исправь, пожалуйста',
                'condition_change_criteria_id' => 6
            ],
            [
                'text' => 'Ну и накосячил, ужас...',
                'condition_change_criteria_id' => 7
            ],
            [
                'text' => 'Одни костыли, выговор...',
                'condition_change_criteria_id' => 8
            ],
        ]);
    }
}
