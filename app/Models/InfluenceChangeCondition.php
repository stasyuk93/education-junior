<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InfluenceChangeCondition extends Model
{
    public $fillable = [
        'listener_employee_id',
        'employee_id',
    ];
}
