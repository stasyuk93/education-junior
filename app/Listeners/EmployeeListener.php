<?php

namespace App\Listeners;

use App\Events\UpdateCriteriaTask;
use Carbon\Carbon;
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

            $changedCondition = ConditionChangeCriteria::where('condition_id', $conditionEmployee->condition_id)
                ->where('criteria_id', $event->employeeTask->criteria_id)
                ->first();
            if($listener) {
                $data = [];
                foreach ($listener as $val){
                    $data[] = [
                        'listener_employee_id' => $val->id,
                        'employee_task_id' => $event->employeeTask->id,
                        'condition_change_criteria_id' => $changedCondition->id,
                        'created_at' => Carbon::now('Europe/Kiev')->format('Y-m-d H:i:s'),
                    ];
                }

                InfluenceChangeCondition::query()->insert($data);
            }

            $conditionEmployee->condition_id = $changedCondition->change_condition_id;
            $conditionEmployee->save();
        }
    }

}
