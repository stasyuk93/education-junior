<div>
    <h4>Подписки на прослушку событий</h4>
    <ul>
        @foreach($listeners as $listener)
            <li>
                <a href="{{route('subscribe-list',[
                    'who_listen' =>$listener->who_listen,
                    'whom_listen' => $listener->whom_listen
                ])}}">{{$listener->whomEmployee->name}}, <span>{{$listener->whomEmployee->position->name}}</span></a>
            </li>
        @endforeach
    </ul>
</div>