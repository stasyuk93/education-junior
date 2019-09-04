@extends('app')
@section('content')
    <h4>Создать новую сущность</h4>
    <form method="post" action="{{route('employee.store')}}">
        {{csrf_field()}}
        <div class="form-control">
            <label>Имя</label>
            <input class="form-control" type="text" name="name" required>
        </div>
        <div class="form-control mt-3">
            <label>Должность</label>
            <select required class="form-control selectpicker" name="position_id">
                @foreach($positions as $position)
                    <option value="{{$position->id}}">{{$position->name}}</option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-success mt-3" type="submit">Сохранить</button>
    </form>
@endsection()
@section('style')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.10/css/bootstrap-select.min.css" rel="stylesheet">
@endsection()
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.10/js/bootstrap-select.min.js"></script>
    <script>
        $('.selectpicker').selectpicker({
            liveSearch: true
        });
    </script>
@endsection