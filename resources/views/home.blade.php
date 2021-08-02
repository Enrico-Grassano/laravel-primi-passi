<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Laravel-primi-passi</title>
    </head>
    <body>
        <h1>{{ $title }}</h1>
        <h2>I'm {{ $name }}</h2>
        <h3>My hobbies are:</h3>
        <ul>
            @foreach ($hobbies as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </body>
</html>