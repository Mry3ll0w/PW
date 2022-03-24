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

    //Funcion de crear del formulario
    public function create()
    {
        $model = new ArticuloModel();

        if(
            $this->request->getMethod()=='post'
            &&
            $this->validate(
                [
                    'title' =>'required|min_length[3]|max_length[255]',
                    'descripcion' => 'required',
                    'cuerpo' => 'required'
                ]
            )
        ){

            $model->save([
                'title'=> $this->request->getPost('title'),
                'descripcion'=> $this->request->getPost('descripcion'),
                'cuerpo' => $this->request->getPost('cuerpo')
            ]);
            
            echo view('articulo/articuloguardado');
        }
        else
        {
            echo view('templates/header',['title' => 'Cretate an articulo item' ]);
            echo view('articulo/creararticulo');
            echo view('templates/footer');
        }

    }
    
}

