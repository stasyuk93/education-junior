<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConditionEmployee extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'employee_id', 'condition_id',
    ];

    public function condition()
    {
        return $this->hasOne(Condition::class, 'id','condition_id' );
    }
}
