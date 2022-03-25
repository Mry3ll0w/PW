<?php namespace App\Controllers;
use CodeIgniter\Controller;
class Articulo extends Controller
{
    public function index()
    {
        //$model = new ArticuloModel();
        $data = [
            //'articulos' => $model->getArticulos (),
            'title' => 'Bienvenido a la web de articulos',
        ];

        echo view('templates/header', $data);
        //echo view('articulo/overview', $data);
        echo view('templates/footer', $data);
    }
    
    public function view($page = 'home') 
    {
        if ( ! is_file(APPPATH. '/Views/articulo/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }
        $data['title'] = ucfirst($page); // Capitalize the first letter
        echo view('templates/header', $data);
        echo view('articulo/'.$page, $data);
        echo view('templates/footer', $data);
    }
}    
    