<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'LoginController::index');
// $routes->get('/', 'Home::index');
$routes->get('/dashboard', 'DashboardController::index');
$routes->get('/login', 'LoginController::index');
$routes->post('/login', 'LoginController::login');

$routes->get('/logout', 'UserController::logout');