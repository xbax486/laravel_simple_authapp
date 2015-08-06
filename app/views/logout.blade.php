@extends('layouts.main')

@section('title')
    Roux Academy: Logout
@stop

@section('h1')
    Login Out!
@stop

@section('article')
    <p>
        You have successfully logged out.
        <a href="{{ URL::to('/login') }}">Log in?</a>
    </p>
@stop