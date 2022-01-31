<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        @foreach ($project as $project)
        <li><h2>{{$project->name}}</h2></li>
        {{$project->body}}
        @endforeach
    </ul>

    
</body>
</html>