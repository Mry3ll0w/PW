@extends('layouts.header')
@section('contenido')
<h2> Bienvenido a la web sobre artículos </h2>
<a href=" {{route('insertar_articulo')}}" title="Añadir articulo">Añadir articulo</a>
<p>Estos son los artículos publicados.</p>
@endsection