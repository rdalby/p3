@extends('layouts.master')
@include('layouts.form')

@section('title')

    @endsection

@section('head')
    @endsection

@section('content')
    <h1>Welcome to {{ config('app.name') }}</h1>

    <p>Please fill out the form below</p>

    @yield('formTest')
@endsection