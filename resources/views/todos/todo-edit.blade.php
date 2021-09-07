@extends('layouts.master')


@section('content')

<div class="card">

<div class="card-body">

<form action="{{route('todos')}}" method="POST">
 @csrf
    <label for="todo">Add Todo</label>
    <input type="text" name="todo" id="todo" class="form-control">
    <button type="submit" class="btn btn-primary">Add</button>
</form>

</div>


</div>

@endsection
