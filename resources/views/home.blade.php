@extends('templates.base')
@section('title', 'Accueil')
@section('content')
  <h1>Bienvenu sur mon laravel</h1>
  @if(Auth::check())
    Hello : {{ Auth::user()->name }}, welcome!
  @endif
@endsection
