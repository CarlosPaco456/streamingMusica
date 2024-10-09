<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;
use CodeIgniter\HTTP\ResponseInterface;

class UsuarioController extends BaseController
{
    public function index()
    {
        $usuarioModel = new UsuarioModel();
        $usuarioModel->insert(
            [
                'nombre' => ' juan',
                'fecha_creacion' => date('Y-m-d H:i:s'),
                'estado' => 'ACTITUD'
            ]
            );
        // $usuarioModel = new UsuarioModel();
        // $usuarioModel2 = model ('UsuarioModel');
        // // return var_dump($usuarioModel, $usuarioModel2);
        // return view('usuarios/index');
        $usuarios = $usuarioModel->findAll();
        return var_dump($usuarios);
        return view('usuarios/index');
    }
}

