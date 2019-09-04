<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class InfluenceChangeCondition extends Model
{
    public $fillable = [
        'listener_employee_id',
        'employee_id',
    ];

    public function employee()
    {
        return $this->belongsTo(\App\Models\Employee\Employee::class);
    }

    public static function getByListenerEmployee($listener_employee)
    {
        return self::query()
            ->select(['*', DB::raw('COUNT(*) as count')])
            ->with('employee')
            ->with('employee.position')
            ->where('listener_employee_id', $listener_employee)
            ->groupBy('listener_employee_id')
            ->get();
    }

    public function listenerEmployee()
    {
        return $this->belongsTo(ListenerEmployee::class);
    }
}
