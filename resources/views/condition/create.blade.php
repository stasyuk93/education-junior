@extends('app')

@section('content')

    <form action="{{route('team-lead.condition.store', request()->route('account_id'))}}" method="post">
        {{csrf_field()}}
        <div class="form-control">
            <label for="">Название</label>
            <input class="form-control" type="text" name="name" required>
        </div>
        <div class="form-control" id="factor-container">
            <h5>Факторы смены состояния</h5>
            <button type="button" class="btn btn-success" id="add_factor">Добавить фактор</button>
            <div class="row" >
                <div class="col-md-6">
                    <label>Фактор</label>
                    <select required id="factor" name="criteria[]" class="selectpicker form-control" data-live-search="true">
                        @foreach($criterias as $criteria)
                            <option value="{{$criteria->id}}">{{$criteria->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <label>Переход в состояние</label>
                    <select required id="condition"  name="condition[]" class="selectpicker form-control" data-live-search="true">
                        @foreach($conditions as $condition)
                            <option value="{{$condition->id}}">{{$condition->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="m-5">
            <button class="btn btn-success" type="submit">Сохранить</button>
        </div>
    </form>

@endsection
@section('style')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.10/css/bootstrap-select.min.css" rel="stylesheet">
@endsection()
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.10/js/bootstrap-select.min.js"></script>
    <script>
        $('.selectpicker').selectpicker({
            liveSearch: true
        });
        $('#add_factor').click(function () {
            $('#factor-container').append(
                $('<div class="row">')
                    .append($('<div class="col-md-6">')
                        .append('<label>Фактор</label>')
                        .append($('#factor').clone())
                    )
                    .append($('<div class="col-md-6">')
                        .append('<label>Переход в состояние</label>')
                        .append($('#condition').clone())
                    )
            );
            $('.selectpicker').selectpicker('render');
        });
    </script>
@endsection