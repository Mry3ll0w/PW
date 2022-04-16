@extends('layouts.header')
@section('contenido')
<h2>Bienvenido a la web sobre artículos</h2>
<a href=" {{route('insertar_articulo')}}" title="Añadir articulo">Añadir articulo</a>
<p>Estos son los artículos publicados.</p>

@foreach($articulos as $fila)
   <a href="{{ route('un_articulo',['art'=>$fila->id]) }}" title="Ver articulo">
    <h2>{{$fila->titulo}}</h2></a>
    <p> {{$fila->descripcion }}</p>
                                                             
    <br/>
@endforeach

{{$articulos->render()}}

@endsection