<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ListenerCondition;
use App\Models\ListenerEmployee;
use App\Models\Employee\TeamLead;

class ListenerEmployeeController extends Controller
{

    public function subscribeList(Request $request)
    {
        if(!$request->has(['who_listen','whom_listen'])) return response('Bad request',400);
        $listeners = ListenerEmployee::query()->where('who_listen', $request->get('who_listen'))
            ->where('whom_listen', $request->get('whom_listen'))
            ->with('listenerCondition')
            ->get();
        return view('listener_employee.show_events', ['listeners' => $listeners, 'employee_id' => $request->get('who_listen')]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('listener_employee.create', [
            'conditions' => ListenerCondition::all(),
            'employee_id' => $request->get('employee_id'),
            'leads' => TeamLead::getAll()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $listener = new ListenerEmployee();
        $listener->who_listen = $request->who_listen;
        $listener->whom_listen = $request->whom_listen;
        $listener->listener_condition_id = $request->listener_condition_id;
        $listener->save();

        return redirect()->route('manager',$request->get('employee_id'));
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
}
