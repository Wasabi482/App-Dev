@extends('base')

@section('title', 'Todo List')

@section('content')
  <h1>📝 Todo List</h1>
  <div>
            <a href="{{route('todos.create')}}">Create a Product</a>
        </div>
<div>

    <table border="1">
        <tr>
            <th>Title</th>
            <th>Completed</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach($todos as $todo)
            <tr>
                <td>{{$todo->title}}</td>

                @if($todo->completed===0)
                <td>Not Completed</td>
                @else
                <td>Completed</td>
                @endif
                <td>
                    <a href="{{route('todo.edit',['todo'=>$todo])}}">Edit</a>
                </td>
                <td>
                    <form method="post" action="{{route('todos.destroy', ['todo' => $todo])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete"/>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>

@endsection
