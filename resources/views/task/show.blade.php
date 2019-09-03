@extends('app')
@section('content')
    <a class="btn btn-outline-success" href="{{route('team-lead.',request()->segment(2))}}">Профиль</a>

    <div>
        <h4>{{$task->title}}</h4>
        <p>{{$task->description}}</p>
    </div>
    <div>
        <h4>Исполнители:</h4>
        <a class="btn btn-primary" href="{{route('team-lead.delegate-task.create',[request()->segment(2),'task' => $task->id])}}">Добавить исполнителя</a>
       <div>
           <ul>
           @foreach($task->employeeTask as $item)
               <li>
                   <a href="{{route('team-lead.implementer',
                       [
                            'account_id' => request()->route('account_id'),
                            'task_id' =>  $task->id,
                            'employee_task_id' => $item->id
                       ]
                       )}}">
                       {{$item->employee->name}}
                   </a>
               </li>
           @endforeach
           </ul>
       </div>
    </div>
@endsection
