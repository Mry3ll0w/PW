<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HolaController extends Controller
{
    public function welcome(){
        $nombre = "Antonio Roldán Andrade";
        return view('welcome',compact('nombre'));
    }
    
    public function saludo($nombre){
        return "<h1>Hola $nombre bienvenido a mi primer controlador</h1>";
    }

    public function saludo2($nombre,$edad){
        return "<h1>Hola $nombre tienes $edad años</h1>";
    }

}
