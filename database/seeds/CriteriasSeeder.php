<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CriteriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('criterias')->insert([
            [
                'name' => 'Успешно выполнена работа',
            ],
            [
                'name' => 'Не правильно выполнена работа',
            ],
        ]);
    }
}
