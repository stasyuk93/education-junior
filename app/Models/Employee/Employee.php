<?php

namespace App\Models\Employee;

use Illuminate\Database\Eloquent\Model;

abstract class Employee extends Model
{
    protected $table = 'employees';

    public $timestamps = false;

}
