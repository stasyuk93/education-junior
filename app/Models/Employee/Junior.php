<?php
/**
 * Created by PhpStorm.
 * User: valerii
 * Date: 01.09.19
 * Time: 14:25
 */

namespace App\Models\Employee;


class Junior extends Employee
{
    public static function getAll()
    {
        return self::where('position_id',1)->get();
    }

    public static function searchByName($name)
    {
        return self::where('name','LIKE',"%$name%")->get();
    }
}