<?php

namespace App\Models;
use CodeIgniter\Model;

class EjemploModel extends Model{
    public function imprime(){
        echo "hola soy un modelo";
    }
}