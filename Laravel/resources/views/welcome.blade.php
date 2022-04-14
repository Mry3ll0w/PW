@extends('layouts.header')
@section('contenido')
      <h2>Programación web </h2>
      @if (is_null ($nombre))
        <h1>Hola persona anónima </hi>
      @else
        <h1>Bienvenido {{$nombre}}</h1>
      @endif
@endsection