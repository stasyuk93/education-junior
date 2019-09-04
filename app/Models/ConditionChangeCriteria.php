<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConditionChangeCriteria extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'condition_id',
        'change_condition_id',
        'criteria_id'
    ];
}
