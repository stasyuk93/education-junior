@extends('app')

@section('content')
    <a class="btn btn-primary" href="{{route('listener-condition.create', ['employee_id' => $employee_id])}}">Добавить событие</a>
    <a class="btn btn-primary" href="{{route('listener-employee.create',['employee_id' => $employee_id])}}">Связать событие с тимлидом</a>

    @include('listener_employee.index', ['listeners' => $manager->whomListen])
@endsection