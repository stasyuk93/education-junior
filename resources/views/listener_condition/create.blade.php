@extends('app')

@section('content')
    <form method="post" action="{{route('listener-condition.store', ['employee_id' => $employee_id])}}">
        {{csrf_field()}}
        <div class="form-group">
            <label for="formGroupExampleInput">Заголовок</label>
            <input name="title" required type="text" class="form-control" id="formGroupExampleInput" placeholder="Заголовок">
        </div>
        <div class="form-group">
            <label for="condition">Настроение</label>
            <select required id="condition" name="condition_id" class="selectpicker form-control" data-live-search="true">
                @foreach($conditions as $condition)
                    <option value="{{$condition->id}}">{{$condition->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="criteria">Критерий</label>
            <select required id="criteria" name="criteria_id" class="selectpicker form-control" data-live-search="true">
                @foreach($criterias as $criteria)
                    <option value="{{$criteria->id}}">{{$criteria->name}}</option>
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