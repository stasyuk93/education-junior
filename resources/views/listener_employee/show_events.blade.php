@extends('app')
@section('content')
    <a class="btn btn-outline-success" href="{{route('manager', $employee_id)}}">Профиль</a>
    <h4>События</h4>
    <ul>
        @foreach($listeners as $listener)
            <li>
                <a href="{{route('influence', $listener->id)}}">
                    {{$listener->listenerCondition->title}}
                </a>
            </li>
        @endforeach
    </ul>
@endsection