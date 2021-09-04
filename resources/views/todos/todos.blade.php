<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todos Page</title>
</head>
<body>
    <ul>
        @foreach ($todos as $todo)
           <h1> <li>{{$todo->content}}</li> </h1>
        @endforeach
    </ul>
</body>
</html>
