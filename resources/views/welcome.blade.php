<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <ul>
            @foreach ($tasks as $task)
                <li><a href="/tasks/{{ $task->id }}">{{ $task->body }}</a></li>
            @endforeach
        </ul>
    </body>
</html>