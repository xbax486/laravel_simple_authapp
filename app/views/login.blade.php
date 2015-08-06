@extends('layouts.main')

@section('title')
    Roux Academy: Login
@stop

@section('h1')
    Login In!
@stop

@section('article')
    {{ Form::open(array('url' => 'login')) }}
    {{ Form::label('username', 'Username') }}
    {{ Form::text('username') }}

    {{ Form::label('password', 'Password') }}
    {{ Form::password('password') }}

    {{ Form::submit('Log In') }}
    {{ Form::close() }}
@stop