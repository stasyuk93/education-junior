<?php

namespace App\Http\Controllers;

use App\Models\Task;
use \Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index($author)
    {
        return Task::where('employee_id',$author)->get();
    }

    public function show($author,$id)
    {
        $task = Task::findOrFail($id);
        return view('task.show',['task'=>$task,]);
    }

    public function create($author)
    {
        return view('task.create',['author' => $author]);
    }

    public function store(Request $request)
    {
        $task = new Task;
        $task->title = $request->get('title');
        $task->description = $request->get('description');
        $task->employee_id = $request->get('employee_id');
        $task->save();
        return redirect()->route('team-lead.tasks', $request->segment(2));
    }


}