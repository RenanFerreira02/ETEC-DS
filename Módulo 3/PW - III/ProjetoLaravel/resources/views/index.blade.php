<!doctype html>
<html lang="{{ app()->getLocale() }}">
@extends('templates.head')

<title>Index</title>

@section('content')

<h1> Início </h1>

<div class="progress">
    <img src="{{url('assets/img/index.svg')}}" alt="">
</div>

@endsection