<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(){
       $mytodos = Todo::all();
       return view('todos.todos')->with([
           'todos'=>$mytodos
       ]);
    }

    public function show(Todo $todo){

        return view('todos.todo',)->with([
            'todo'=>$todo
        ]);

    }

    public function store(Request $request){

        return Todo::create(
            [
                'user_id'=>1,
                'content'=>$request->todo,

            ]


        );
        return redirect(route('todos'));

    }



     public function edit(){
         return view('todos.todo-edit');
     }

     public function delete($id){}


}
