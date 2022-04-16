<?php

namespace App\Http\Controllers;

use App\Models\Articulo;

use DB;

use Illuminate\Http\Request;

class ArticuloController extends Controller
{
    public function index(){
        return view('articulos.articulos');
    }

    public function nuevo(){
        return view('articulos.nuevo');
    }

}