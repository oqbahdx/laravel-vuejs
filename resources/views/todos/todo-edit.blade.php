@extends('layouts.master')


@section('content')

<div class="card">

<div class="card-body">

<div class="from" action = "{{ route('todos') }}" method="post">
@csrf


    <div class="form-group">
      <label for="">Add Todo</label>


    </div>
    <div class="form-gruop">
        <input type="text" name="todo" id="todo" class="form-control">


    </div>
  <div class="form-group">
    <button class="btn btn-primary" type="submit">add</button>
  </div>

</div>

</div>


</div>

@endsection
