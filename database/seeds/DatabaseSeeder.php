<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(positionsSeeder::class);
        $this->call(conditionsSeeder::class);
        $this->call(CriteriasSeeder::class);
        $this->call(conditonChangeCriteriasSeeder::class);
        $this->call(employeesSeeder::class);
        $this->call(listenerConditionsSeeder::class);
        $this->call(listenerEmployeesSeeder::class);
        $this->call(MessageConditionChange::class);
        $this->call(TaskSeeder::class);
        $this->call(TaskEmployeeSeeder::class);
        $this->call(ConditionEmployee::class);
    }
}
