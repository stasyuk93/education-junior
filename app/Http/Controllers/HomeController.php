<?php

namespace App\Http\Controllers;

use App\Models\Employee\Employee;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index',['employees' => Employee::with('position')->get()]);
    }
}