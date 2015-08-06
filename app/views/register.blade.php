@extends('layouts.main')

@section('title')
    Roux Academy: Registration
@stop

@section('h1')
    Sign Up!
@stop

@section('article')
    {{ Form::open(array('url' => 'register')) }}
    {{ Form::label('email', 'Email Address') }}
    {{ Form::text('email') }}

    {{ Form::label('username', 'Username') }}
    {{ Form::text('username') }}

    {{ Form::label('password', 'Password') }}
    {{ Form::password('password') }}

    {{ Form::submit('Sign Up') }}
    {{ Form::close() }}
@stop