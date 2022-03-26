<?php

namespace App\Controllers;
use CodeIgniter\Controllers;

use App\Models\EjemploModel;

class Ejemplo extends BaseController
{
    public function impresion()
    {
        $model = new EjemploModel();
        return $model->imprime();
    }

    
}
