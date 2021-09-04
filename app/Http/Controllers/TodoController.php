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

    public function store(Request $request){}

    public function update($id,Request $request){}

    public function delete($id){}
}
