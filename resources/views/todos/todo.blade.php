@extends('layouts.master')

@section('title')
My Todo
@endsection

@section('content')

<h1>{{$todo->content}}</h1>

@endsection
