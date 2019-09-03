<?php

namespace App\Listeners;

use App\Events\UpdateCriteriaTask;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\ListenerEmployee;
use App\Models\InfluenceChangeCondition;
use App\Models\ConditionEmployee;
use App\Models\ConditionChangeCriteria;

class EmployeeListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UpdateCriteriaTask  $event
     * @return void
     */
    public function handle(UpdateCriteriaTask $event)
    {
        $this->InfluenceChangeCondition($event);
    }

    protected function InfluenceChangeCondition(UpdateCriteriaTask $event)
    {
        $conditionEmployee = ConditionEmployee::where('employee_id', $event->employeeTask->task->employee_id)->first();
        if($conditionEmployee){

            $listener =  ListenerEmployee::query()->select('listener_employees.id')
                ->join('listener_conditions', 'listener_conditions.id','=', 'listener_condition_id')
                ->where('whom_listen',$event->id_employee)
                ->where('criteria_id',$event->employeeTask->criteria_id)
                ->where('listener_conditions.condition_id', $conditionEmployee->condition_id)
                ->get();
            if($listener) {
                $data = [];
                foreach ($listener as $val){
                    $data[] = [
                        'listener_employee_id' => $val->id,
                        'employee_id' => $event->employeeTask->employee_id,
                    ];
                }
                InfluenceChangeCondition::query()->insert($data);
            }
            $changedCondition = ConditionChangeCriteria::where('condition_id', $conditionEmployee->condition_id)
                ->where('criteria_id', $event->employeeTask->criteria_id)
                ->first();
            $conditionEmployee->condition_id = $changedCondition->change_condition_id;
            $conditionEmployee->save();
        }
    }

}
