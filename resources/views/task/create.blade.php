@extends('app')
@section('content')
    <h4>Создать новую задачу</h4>
<form action="{{route('team-lead.task.store',[request()->segment(2)])}}" method="post">
    {{csrf_field()}}
    <input type="hidden" name="employee_id" value="{{$author}}">
    <div class="form-group">
        <label>Заголовок</label>
        <input type="text" class="form-control" name="title" required>
    </div>
    <div class="form-group">
        <label>Описание</label>
        <textarea class="form-control" rows="3" name="description" required></textarea>
    </div>
    <button class="btn btn-primary" type="submit"> Сохранить</button>
</form>
@endsection