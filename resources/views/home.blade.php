@extends('layout')
@section('title', 'Home')
{{-- Sobreescribe el @yield(marcador de posicion) de la vista layout  --}}

@section('content')
    <h1>Home: {{$nombre}}</h1>
@endsection
