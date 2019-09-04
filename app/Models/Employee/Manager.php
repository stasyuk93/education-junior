<?php

namespace App\Models\Employee;


class Manager extends Employee
{
    public function whomListen()
    {
        return $this->hasMany(\App\Models\ListenerEmployee::class, 'who_listen', 'id')
            ->groupBy('whom_listen');
    }
}