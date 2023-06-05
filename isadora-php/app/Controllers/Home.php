<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

class Home extends BaseController
{
    public function index()
    {
        $model = new UsuarioModel();
        $array = $model->getUsuario();

        $data = [
            "array" => $array,
            // "cartaEdit" => session("carta")
        ];
        return view('index', $data);
    }

    public function crearUsuario(){
        $model = new UsuarioModel();
        $model -> insertUsuario($_POST);
        return redirect()->to('/');
    }
}


//controlador : es el que conecta el modelo y las vistas segun sea necesario
