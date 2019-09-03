<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use App\Models\EmployeeTask;

class UpdateCriteriaTask
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $employeeTask;

    /**
     * id Junior
     * @var integer
     */
    public $id_employee;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(EmployeeTask $employeeTask, $id_employee)
    {
        $this->employeeTask = $employeeTask;
        $this->id_employee = $id_employee;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
