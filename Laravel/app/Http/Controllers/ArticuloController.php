<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use App\Http\Requests\NuevoArticuloRequest;

use DB;

use Illuminate\Http\Request;

class ArticuloController extends Controller
{
    public function index(){
        
        $articulos = Articulo::orderBy('id','desc')->paginate(2);

        return view('articulos.articulos')->with(['articulos'=> $articulos]);
    }

    public function nuevo(){
        return view('articulos.nuevo');
    }


    public function mostrar_articulo(Articulo $art){
        return view('articulos.mostrar_articulo')->with(['articulo' => $art]);
    }

    public function guardar(NuevoArticuloRequest $request){
        $art = Articulo::create($request->only('titulo','descripcion','cuerpo'));
        return redirect()->route('un_articulo',['art'=>$art->id]);
    }
}