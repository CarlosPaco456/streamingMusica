<?php

namespace App\Controllers\API\V1;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;
use App\Models\UsuarioModel;

class UsuarioController extends ResourceController
{
    // protected $modelName = 'App\Models\UsuarioModel';
    protected $modelName = UsuarioModel::class;
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {
        $limit = $this->request->getVar('limit') ?? 10;
        $offset = $this->request->getVar('offset') ?? 0;
        $model = new UsuarioModel();
        $usuarios = $model->findAll($limit, $offset);
        return $this->respond([
            'status' => 'success',
            'message' => 'OK',
            'data' => ['usuarios' => $usuarios]
        ]);
    }

    /**
     * Return the properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function show($id = null)
    {
        $usuario = $this->model->find($id);
        if (!$usuario) {
            return $this->failNotFound('No se ha encontrado un usuario con el id: ' . $id, 404, 'not found'); 
        }
        return $this->respond([
            'status' => 'success',
            'message' => 'Usuario encontrado',
            'data' => $usuario
        ]);
    }

    /**
     * Return a new resource object, with default properties.
     *
     * @return ResponseInterface
     */
    public function new()
    {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters.
     *
     * @return ResponseInterface
     */
    public function create()
    {
        $validacion = \Config\Services::validation();
        // $validacion->setRules([
        //     'nombre' => 'required|min_length[3]',
        //     'estado' => 'required|in_list[ACTIVO,INACTIVO]'
        // ]);

        $validacion->setRuleGroup('usuario');

        if (!$validacion->withRequest($this->request)->run()) {
            return $this->fail($validacion->getErrors());
        }

        $nombre = $this->request->getPost('nombre');
        $estado = $this->request->getPost('estado');
        
        $id = $this->model->insert([
            'nombre' => $nombre,
            "fecha_creacion" => date('Y-m-d H:i:s'),
            'estado' => $estado
        ], true);

        return $this->respondCreated([
            'status' => 'success',
            'message' => 'Usuario creado exitosamente',
            'data' => $id
        ]);
    }

    /**
     * Return the editable properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function delete($id = null)
    {
        //
    }
}
