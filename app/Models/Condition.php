<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{
    public $timestamps = false;

    public static function search($name)
    {
        return self::where('name','LIKE',"%$name%")->get();
    }

    public function conditionChangeCriteria()
    {
        return $this->hasMany(ConditionChangeCriteria::class);
    }
}
