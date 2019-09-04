<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InfluenceChangeCondition;
use App\Models\ListenerEmployee;

class InfluenceChangeConditionController extends Controller
{
    public function index($listener_employee)
    {
        return view('influence.index', [
            'influence' => InfluenceChangeCondition::getByListenerEmployee($listener_employee),
            'listener_employee' => ListenerEmployee::with('listenerCondition')->find($listener_employee),
        ]);
    }
}
