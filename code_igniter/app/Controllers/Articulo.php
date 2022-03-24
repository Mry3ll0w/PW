<?php

namespace App\Controllers;
use CodeIgniter\Controller;

use App\Models\ArticuloModel;

class Articulo extends Controller{

    public function index(){
                  
        $model = new ArticuloModel();

        $data = [
            'articulos' => $model->getArticulos(),
            'title'=>'Bienvenido a la web de articulos'
        ];
        echo view('templates/header',$data);
        echo view('articulo/overview',$data);
        echo view('templates/footer',$data);
    }

    public function view($page = 'home')
    {

        if (! is_file(APPPATH.'/Views/articulo/'.$page.'php')){

            //Error Whoops we dont have a page
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page);//Pone en mayuscula la primera letra

        echo view('templates/header', $data);
        echo view('articulo/'.$page, $data);
        echo view('templates/footer', $data);


    }

    
}

