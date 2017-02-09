@extends('templates.base')
@section('title', 'Accueil')
@section('content')
  <h1>Bienvenu sur mon laravel</h1>
  @if(Auth::check())
    Salut : {{ Auth::user()->name }}, bienvenu!
    <br/>
    <br/>
  @endif
  <button id="btn1" type="submit">Agrandir mon contenu</button>
  <button id="btn2" type="submit">Réinitialiser mon contenu</button>
  <div id="box" style="background:rgb(250,250,250);height:100px;width:100px;margin:6px;">Ceci est ma page d'acceuil et un example simple de javascript</div>
@endsection
