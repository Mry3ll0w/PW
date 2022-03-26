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

    public function view($iId = NULL){
        $model = new ArticuloModel();
        $data['articulos'] = $model->getArticulos($iId);
        if (empty($data['articulos'])){
            throw new \CodeIgniter\Exceptions\PageNotFoundException('No existe articulo con id'. $iId);
      
        }
                         
        
        $data['title'] = 'Articulos'; //-Capitalize the first letter
        echo view('templates/header', $data);
        echo view('articulo/unarticulo', $data);
        echo view('templates/footer', $data);
                                 

    } 
        
    //Funcion de crear del formulario
    
    public function create(){
        $model = new ArticuloModel();
        if (
            $this->request->getMethod() === 'post' && 
            $this->validate([
                    'title' => 'required min_length[3]|max_length[255]',
                    'descripcion' => 'required',
                    'cuerpo' => 'required'
        ])){

            Smodel->save([
                'title' => $this->request->getPost('title'),
                'descripcion' => $this->request->getPost('descripcion'),
                'cuerpo' => $this->request->getPost('cuerpo'),
            ]);
            echo view('articulo/articuloguardado');
        }
        else{
            echo view('templates/header', ['title' => 'Create a articulo item']);
            echo view('articulo/creararticulo');
            echo view('templates/footer');

        }
     
    }
    
}

