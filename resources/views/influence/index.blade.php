@extends('app')

@section('content')
    <a class="btn btn-outline-primary" href="{{route('subscribe-list',
    ['who_listen' =>$listener_employee->who_listen,'whom_listen' => $listener_employee->whom_listen])}}">События</a>
    <h4>Событие {{$listener_employee->listenerCondition->title}} </h4>
    <table class="table">
        <thead>
            <tr>
                <th>Имя</th>
                <th>Должность</th>
                <th>Количество</th>
            </tr>
        </thead>
        <tbody>
        @foreach($influence as $item)
            <tr>
                <td>{{$item->employee->name}}</td>
                <td>{{$item->employee->position->name}}</td>
                <td>{{$item->count}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection