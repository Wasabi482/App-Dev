<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit TodoList</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{route('todos.update', ['todo' =>$todo])}}">
        @csrf
        @method('put')
        <div>
            <label for="">Title</label>
            <input type="text" name="title" placeholder="Title" value="{{$todo->title}}">

        </div>
        <div>
            <label for="">Completed</label>
            <input type="checkbox" name="completed" id="completed" value="1">

        </div>
        <div>
            <input type="submit" value="Update"/>
        </div>
    </form>
</body>
</html>
