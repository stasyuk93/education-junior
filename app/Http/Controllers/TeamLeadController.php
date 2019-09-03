<?php

namespace App\Http\Controllers;
use App\Models\Employee\TeamLead;
use App\Models\Employee\Junior;
use App\Models\Criteria;
use App\Models\EmployeeTask;
use App\Models\Condition;
use App\Models\ConditionEmployee;
use Illuminate\Http\Request;


class TeamLeadController extends Controller
{
    public function index($id)
    {
        $teamLead = TeamLead::findOrFail($id);
        return view('team_lead.index',['teamLead' => $teamLead]);
    }

    public function getImplementer(Request $request)
    {
        return view('team_lead.implementer',
            [
                'criterias' =>  Criteria::all(),
                'employee_task' => EmployeeTask::findOrFail($request->route('employee_task_id'))
            ]
        );
    }

    public function searchCondition(Request $request)
    {
        $search = $request->get('q');
        return response()->json(Condition::search($search));
    }

    public function setCondition(Request $request)
    {
        ConditionEmployee::updateOrCreate(
            [
                'employee_id' => $request->get('employee_id')
            ],
            [
                'employee_id' => $request->get('employee_id'),
                'condition_id' => $request->get('condition_id')
            ]
        );
    }


}