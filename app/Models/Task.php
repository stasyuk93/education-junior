<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function employeeTask()
    {
        return $this->hasMany(EmployeeTask::class);
    }
}
