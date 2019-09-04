<?php
/**
 * Created by PhpStorm.
 * User: valerii
 * Date: 01.09.19
 * Time: 14:25
 */

namespace App\Models\Employee;


class TeamLead extends Employee
{
    public function task()
    {
        return $this->hasMany(\App\Models\Task::class,'employee_id','id');
    }

    public function condition()
    {
        return $this->hasOne(\App\Models\ConditionEmployee::class, 'employee_id','id');
    }

    public static function getAll()
    {
        return self::where('position_id', 4)->get();
    }
}