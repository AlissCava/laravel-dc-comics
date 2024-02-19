@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')

@section('content')
    <h1>Comics:</h1>
    <a href="{{ route('comic.create') }}">CREATE</a>