<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UsuarioModel;

class UsuarioController extends BaseController
{
    public function index()
    {
        $usuarioModel = new UsuarioModel();
        // $usuarioModel2 = model('UsuarioModel');
        // $insertId = $usuarioModel->insert([
        //     'nombre' => 'Juan',
        //     'fecha_creacion' => date('Y-m-d H:i:s'),
        //     'estado' => 'ACTIVO',
        // ]);
        $usuarios = $usuarioModel->findAll();
        // return dd($usuarioModel->findAll());
        return view("usuarios/index", ['usuarios' => $usuarios]);
    }
}
