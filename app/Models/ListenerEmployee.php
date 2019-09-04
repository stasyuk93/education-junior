<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ListenerEmployee extends Model
{
    public $timestamps = false;

    public function whomEmployee()
    {
        return $this->belongsTo(\App\Models\Employee\Employee::class, 'whom_listen', 'id');
    }

    public function listenerCondition()
    {
        return $this->belongsTo(\App\Models\ListenerCondition::class, 'listener_condition_id', 'id');
    }

}
