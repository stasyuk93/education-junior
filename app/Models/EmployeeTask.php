<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeeTask extends Model
{
    const CREATED_AT = 'start_date';

    const UPDATED_AT = null;

    public function task()
    {
        return $this->belongsTo(Task::class);
    }

    public function employee()
    {
        return $this->belongsTo(Employee\Junior::class);
    }

    public function influences()
    {
        return $this->hasMany(InfluenceChangeCondition::class);
    }
}
