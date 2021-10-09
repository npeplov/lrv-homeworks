<h2>Todo list</h2>
<ul>
    @foreach ($tasks as $task)
        <li>
            #{{$task->id}}: {{$task->title }}
        </li>
    @endforeach
</ul>
