@extends('layouts.main')

@section('title')
    Roux Academy: Thanks
@stop

@section('h1')
    Thanks for registering!
@stop

@section('article')
    <p>You've registered {{ $theEmail }}.</p>
@stop