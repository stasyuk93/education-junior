<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class InfluenceChangeCondition extends Model
{
    public $fillable = [
        'listener_employee_id',
        'employee_task_id',
        'condition_change_criteria_id',
    ];

    public function employeeTask()
    {
        return $this->belongsTo(\App\Models\EmployeeTask::class);
    }

    public static function getByListenerEmployee($listener_employee)
    {
        return self::query()
            ->select(['*', DB::raw('COUNT(*) as count')])
            ->with('employeeTask')
            ->with('employeeTask.employee')
            ->with('employeeTask.employee.position')
            ->where('listener_employee_id', $listener_employee)
            ->groupBy('listener_employee_id')
            ->get();
    }

    public function listenerEmployee()
    {
        return $this->belongsTo(ListenerEmployee::class);
    }

    public function messages()
    {
        return $this->hasMany(MessageConditionChange::class, 'condition_change_criteria_id', 'condition_change_criteria_id');
    }
}
