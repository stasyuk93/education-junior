@extends('app')

@section('content')
    <form method="post" action="{{route('listener-employee.store', ['employee_id' => $employee_id])}}">
        {{csrf_field()}}
        <input type="hidden" name="who_listen" value="{{$employee_id}}">
        <div class="form-group">
            <label for="condition">Событие</label>
            <select required id="condition" name="listener_condition_id" class="selectpicker form-control" data-live-search="true">
                @foreach($conditions as $condition)
                    <option value="{{$condition->id}}">{{$condition->title}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="condition">Team Lead</label>
            <select required id="whom_listen" name="whom_listen" class="selectpicker form-control" data-live-search="true">
                @foreach($leads as $lead)
                    <option value="{{$lead->id}}">{{$lead->name}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit">Сохранить</button>
    </form>
@endsection
@section('style')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.10/css/bootstrap-select.min.css" rel="stylesheet">
@endsection()
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.10/js/bootstrap-select.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ajax-bootstrap-select/1.4.5/js/ajax-bootstrap-select.min.js"></script>
    <script>
        $('.selectpicker').selectpicker();
    </script>
@endsection