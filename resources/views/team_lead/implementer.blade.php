@extends('app')
@section('content')
    <form action="{{route('team-lead.update-criteria',
    [
        'account_id' => request()->route('account_id'),
        'task_id' => request()->route('task_id'),
    ])}}" method="post">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$employee_task->id}}">
        <div class="mb-3 mt-3">
            <h5>Решение задачи</h5>
            <p>{{$employee_task->answer}}</p>
        </div>
        <div class="card">
            <div class="card-body">
                @foreach($criterias as $criteria)
                    <div class="custom-control custom-radio">
                        <input @if($employee_task->criteria_id == $criteria->id) checked @endif type="radio" class="custom-control-input criteria" id="criteria_{{$criteria->id}}" name="criteria" value="{{$criteria->id}}">
                        <label class="custom-control-label" for="criteria_{{$criteria->id}}">{{$criteria->name}}</label>
                    </div>
                @endforeach
            </div>
        </div>
        <button class="btn btn-primary mt-3" type="submit">Сохранить</button>
    </form>

@endsection