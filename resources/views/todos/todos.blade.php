  @extends('layouts.master')

@section('title')
  My Todos
@endsection

  @section('content')


    <ul>
        @foreach ($todos as $todo)
           <h1> <li> <a href="{{route('todo',['todo'=>$todo->id])}}">{{$todo->content}}</a> </li> </h1>
        @endforeach
    </ul>
    @endsection
