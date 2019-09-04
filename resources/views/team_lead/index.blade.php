@extends('app')

@section('content')
    <div>
        <div class="form-group">
            <label for="condition">Настроение</label>
            <select id="condition" name="condition" class="selectpicker" data-live-search="true">
                @foreach($conditions as $condition)
                    <option @if($teamLead->condition && ($teamLead->condition->condition_id == $condition->id)) selected @endif value="{{$condition->id}}">{{$condition->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    @include('task.index', ['tasks' => $teamLead->task])
@endsection
@section('style')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.10/css/bootstrap-select.min.css" rel="stylesheet">
@endsection()
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.10/js/bootstrap-select.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ajax-bootstrap-select/1.4.5/js/ajax-bootstrap-select.min.js"></script>
    <script>
        $('#condition').selectpicker({
            liveSearch: true
        });
        $('#condition').change(function(){
            var id = $(this).val();
            if(!id) return;
            $.post('/ajax/set-condition-employee',
                {
                    employee_id: '{{$teamLead->id}}',
                    condition_id: id
                }
            );
        });
    </script>
@endsection()