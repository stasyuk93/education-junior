<?php

namespace App\Http\Controllers;

use App\Models\Employee\Junior;
use Illuminate\Http\Request;
use App\Models\EmployeeTask;

class JuniorController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->get('q');
        return response()->json(Junior::searchByName($search));
    }

    public function index($id)
    {
        $junior = Junior::findOrFail($id);

//        $tasks = EmployeeTask::where('');

    }
}