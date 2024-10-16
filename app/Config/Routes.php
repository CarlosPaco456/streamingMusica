<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('usuario','UsuarioController::index');

$routes->group('api/v1', ['namespace' => 'App\Controllers\API\V1' ], function($routes) {
    /** ruta para listar todos los usuario */
    // $routes->get('usuario', 'UsuarioController::index');
    $routes->group('usuario', function($routes) {
        $routes->get('/', 'UsuarioController::index');
        $routes->get('(:num)', 'UsuarioController::show/$1'); // /usuario/1
        $routes->post('/', 'UsuarioController::create');
    });
});
