@extends('master')

@section('headScripts')
    <link href="{{ asset('css/home.css') }}" type="text/css" rel="stylesheet">
    @endsection

@section('pageContent')
    <h1>This is the stuff: {{ $stuff }}</h1>

@endsection

