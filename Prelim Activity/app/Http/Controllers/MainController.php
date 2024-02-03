<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function todolist()
    {
        $todos = Todo::all();
        return view('todo', ['todos' => $todos]);
    }

    public function create(){
        return view('todo.create');
    }

    public function store(Request $request){
       $data= $request->validate([
        'title'=>'required',
        'completed' =>'nullable|boolean',
       ]);

       $data['completed']= $request->has('completed');
       $newTodo = Todo::create($data);

       return redirect(route('todos.index'));
    }


    public function edit(Todo $todo){
        return view('todo.edit',['todo' =>$todo]);
    }

    public function update(Todo $todo, Request $request){
        $data= $request->validate([
            'title'=>'required',
            'completed' =>'nullable|boolean',
           ]);

           $todo->update($data);

           return redirect(route('todos.index'))->with('success', 'Product update successfully');
    }

    public function destroy(Todo $todo){
        $todo->delete();
        return redirect(route('todos.index'))->with('success', 'Product deleted successfully');
    }

    public function about()
    {

        return view('about');
    }

    public function contact(){

        return view('contact');
    }
}

