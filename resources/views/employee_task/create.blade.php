@extends('app')
@section('content')
    <form method="post" action="{{route('team-lead.delegate-task.store',[request()->route('account_id'),request()->route('task_id')])}}">
        {{csrf_field()}}
        <input type="hidden" name="task_id" value="{{request()->route('task_id')}}">
        <div class="form-group">
            <select name="junior_id" class="selectpicker form-control" data-live-search="true">
            </select>
        </div>
        <button class="btn btn-success" type="submit">Сохранить</button>
    </form>
@endsection()
@section('style')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.10/css/bootstrap-select.min.css" rel="stylesheet">
@endsection()
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.10/js/bootstrap-select.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ajax-bootstrap-select/1.4.5/js/ajax-bootstrap-select.min.js"></script>
<script>
    $('.selectpicker').selectpicker({
        liveSearch: true
    })
        .ajaxSelectPicker({
            ajax: {
                url: '/ajax/search-junior',
                method: 'GET',
                data: {
                    @verbatim
                    q: '{{{q}}}'
                    @endverbatim
                }
            },
            cache: false,
            clearOnEmpty: true,
            preserveSelected: true,
            preprocessData: function(response){
                var data = [];
                $(response).each(function () {
                    data.push(
                        {
                            value: this.id,
                            text: this.name
                        }
                    );
                });

                return data;
            }
        });
</script>
@endsection()