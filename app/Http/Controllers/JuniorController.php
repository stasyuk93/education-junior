<?php

namespace App\Http\Controllers;

use App\Models\Employee\Junior;
use Illuminate\Http\Request;

class JuniorController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->get('q');
        return response()->json(Junior::searchByName($search));
    }

    public function index($id)
    {
        $junior = Junior::with('employeeTask')->with('employeeTask.task')->findOrFail($id);
        return view('junior.index', ['junior' => $junior]);
    }

}