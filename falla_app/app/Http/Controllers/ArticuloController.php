<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;

class ArticuloController extends Controller
{
    public function index(){
        return view('articulos.articulos');
    }
}
