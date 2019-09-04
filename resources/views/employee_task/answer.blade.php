@extends('app')
@section('content')
    <a class="btn btn-outline-success mb-3 mt-3" href="{{route('task-junior',$employee_task->employee_id)}}">Назад</a>

    <h4>Ответ на задачу</h4>
    <form method="post" action="{{route('answer-task.store',$employee_task->id)}}">
        {{csrf_field()}}
        <div class="form-group">
            <textarea class="form-control" name="answer" rows="10" maxlength="1024">{{$employee_task->answer}}</textarea>
        </div>
        <button class="btn btn-success" type="submit">Сохранить</button>
    </form>
@endsection()