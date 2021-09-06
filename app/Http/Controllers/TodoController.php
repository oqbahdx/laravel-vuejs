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

    public function store(Request $request){}

    public function update($id,Request $request){}

    public function delete($id){}
}
