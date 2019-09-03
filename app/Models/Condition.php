<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{
    public static function search($name)
    {
        return self::where('name','LIKE',"%$name%")->get();
    }
}
