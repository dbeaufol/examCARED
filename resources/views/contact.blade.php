@extends('templates.base')
@section('title', 'Contact')
@section('content')
  <!--Formulaire permetant d'ajouter un message a la base de donnée-->
  <h1 id="h1">Page contact</h1>

  {!! Form::open(['url'=> 'contact']) !!}

  <div class="form-group">
    {!! Form::label('Ton Nom') !!}
    <br>
    {!! Form::text('name') !!}
    <br><br>
  </div>

  <div class="form-group">
    {!! Form::label('Ton Adresse Mail') !!}
    <br>
    {!! Form::text('email') !!}
    <br><br>
  </div>

  <div class="form-group" id="monText">
    {!! Form::label('Ton Message') !!}
    <br>
    {!! Form::textarea('message') !!}
    <br><br>
  </div>

  <div class="form-group">
    {!! Form::submit('Contacter nous!')!!}
  </div>
{!! Form::close() !!}
@endsection
