@extends('templates.base')
@section('title', 'Contact')
@section('content')
  <h1>Page contact</h1>
  <ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
  </ul>

  {!! Form::open(array('route' => 'contact_store', 'class' => 'form')) !!}

  <div class="form-group">
    {!! Form::label('Ton Nom') !!}
    {!! Form::text('name', null,
        array('required',
              'class'=>'form-control',
              'placeholder'=>'Ton nom')) !!}
  </div>

  <div class="form-group">
    {!! Form::label('Ton Adresse Mail') !!}
    {!! Form::text('email', null,
        array('required',
              'class'=>'form-control',
              'placeholder'=>'Ton adresse mail')) !!}
  </div>

  <div class="form-group">
    {!! Form::label('Ton Message') !!}
    {!! Form::textarea('message', null,
        array('required',
              'class'=>'form-control',
              'placeholder'=>'Ton message')) !!}
  </div>

  <div class="form-group">
    {!! Form::submit('Contacter nous!',
      array('class'=>'btn btn-primary')) !!}
  </div>
{!! Form::close() !!}
@endsection
