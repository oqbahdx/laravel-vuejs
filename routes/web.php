<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\TodoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $name = 'oqbah ahmed dx';
    return view('welcome')->with([
        'name'=>$name
    ]);
});

Route::get('about',[AboutController::class,'index']);
Route::get('about/history',[AboutController::class,'myHistory']);
Route::get('contact', function () {
    return [
        'name'=>'hello'
    ];
});


Route::get('todos',[TodoController::class,'index'])->name('todos');
Route::post('todos',[TodoController::class,'store']);
Route::get('todos/new',[TodoController::class,'edit']);
Route::get('todos/{todo}',[TodoController::class,'show'])->name('todo');
