@extends('templates.base')
@section('title', 'Contact')
@section('content')
  <h1 id=h1>Page contact</h1>

  {!! Form::open(['url'=> 'contact']) !!}

  <div class="form-group">
    {!! Form::label('Ton Nom') !!}
    {!! Form::text('name') !!}
  </div>

  <div class="form-group">
    {!! Form::label('Ton Adresse Mail') !!}
    {!! Form::text('email') !!}
  </div>

  <div class="form-group">
    {!! Form::label('Ton Message') !!}
    {!! Form::textarea('message') !!}
  </div>

  <div class="form-group" id="monText">
    {!! Form::submit('Contacter nous!')!!}
  </div>
{!! Form::close() !!}
@endsection
