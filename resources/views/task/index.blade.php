<a class="btn btn-primary" href="{{route('team-lead.task.create',request()->segment(2))}}" role="button">Добавить задачу</a>
<table>
    @foreach($tasks as $task)
        <tr>
            <td>
                <a href="{{route('team-lead.task.show',[request()->segment(2),$task->id])}}">{{$task->title}}</a>
            </td>
        </tr>
    @endforeach
</table>
