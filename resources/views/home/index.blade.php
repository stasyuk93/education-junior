@extends('app')

@section('content')
    <h4>Список сущностей</h4>
    <ul>
        @foreach($employees as $employee)
            <li>
                <a href="
                @switch($employee->position_id)
                    @case(1)
                        {{route('junior',$employee->id)}}
                        @break
                    @case(4)
                        {{route('team-lead.',$employee->id)}}
                        @break
                    @default
                        {{route('manager',$employee->id)}}
                @endswitch
                        ">{{$employee->name}} <span>{{$employee->position->name}}</span></a>
            </li>
        @endforeach
    </ul>
@endsection()