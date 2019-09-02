<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class conditionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('conditions')->insert([
            [
                'name' => "Хорошее"
            ],
            [
                'name' => "Нормальное"
            ],
            [
                'name' => "Плохое"
            ],
            [
                'name' => "Не попадись на глаза"
            ],
        ]);
    }
}
