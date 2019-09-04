<?php

namespace App\Http\Controllers;

use App\Models\Employee\Manager;

class ManagerController extends Controller
{
    public function index($id)
    {
        $manager =  Manager::findOrFail($id);
        return view('manager.index',[
            'employee_id' => $id,
            'manager' => $manager
        ]);
    }
}