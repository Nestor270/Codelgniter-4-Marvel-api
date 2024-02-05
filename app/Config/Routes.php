<?php
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->group('/marvel', ['namespace' => 'App\Controllers'], function($routes) {
    $routes->get('/personajes', 'MarvelController::index');
    $routes->get('/agregar', 'MarvelController::agregar');
    $routes->get('/editar/(:num)', 'MarvelController::editar/$1');
    $routes->get('/eliminar/(:num)', 'MarvelController::eliminar/$1');
    // Agrega más rutas según tus necesidades
});

