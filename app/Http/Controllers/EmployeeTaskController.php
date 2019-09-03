<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\EmployeeTask;

class EmployeeTaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee_task.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $delegate = new EmployeeTask();
        $delegate->task_id = $request->get('task_id');
        $delegate->employee_id = $request->get('junior_id');
        $delegate->save();
        return redirect()->route('task.show', [$request->route('account_id'), $request->route('task_id')]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function updateIsReview()
    {

    }

    public function updateIsComplete(Request $request)
    {
        $task = EmployeeTask::findOrFail($request->get('id'));
        $task->criteria_id = $request->get('is_complete');
        $task->save();
    }

    public function updateCriteria(Request $request)
    {
        $task = EmployeeTask::findOrFail($request->get('id'));
        $task->criteria_id = $request->get('criteria');
        $task->save();
        event(new \App\Events\UpdateCriteriaTask($task, $request->route('account_id')));
        return redirect()->route('team-lead.task.show', [
            'account_id' => $request->route('account_id'),
            'task_id' => $request->route('task_id'),
        ]);
    }
}
