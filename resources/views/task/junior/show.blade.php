@extends('app')
@section('content')
    <div>
        <a class="btn btn-outline-success mb-3 mt-3" href="{{route('answer-task',$task->id)}}">Ответ на задачу</a>

        <h4>{{$task->task->title}}</h4>
        <p>{{$task->task->description}}</p>
    </div>
    <div>
        <h4>Комментарии тимлида:</h4>
        @foreach($task->influences as $influence)
            @foreach($influence->messages as $msg)
                <p>
                    <i>{{$influence->created_at}}</i>
                    {{$msg->text}}
                </p>
            @endforeach
        @endforeach
    </div>
@endsection