<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskEmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employee_tasks')->insert([
            'employee_id' => 1,
            'task_id' => 1,
            'answer' => 'Реализация проекта: https://github.com/stasyuk93/education-junior'
        ]);
    }
}
