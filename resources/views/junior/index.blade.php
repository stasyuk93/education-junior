@extends('app')

@section('content')
    <h4>Список задач</h4>
    <table>
        @foreach($junior->employeeTask as $task)
            <tr>
                <td>
                    <a href="{{route('task-junior',$task->id)}}">{{$task->task->title}}</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection