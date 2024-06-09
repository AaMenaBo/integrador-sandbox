<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Usar solo cuando hay un solo metodo para el controlador 
    public function __invoke()
    {
        return 'Retorno desde el controlador';
    }
}
