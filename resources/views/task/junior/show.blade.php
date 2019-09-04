@extends('app')
@section('content')
    <div>
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