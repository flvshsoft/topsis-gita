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

$routes->get('/user', 'UserController::index');
$routes->get('/user/tambah', 'UserController::tambah');
$routes->post('/user/tambah', 'UserController::insertData');
$routes->get('/user/ubah/(:any)', 'UserController::ubah');
$routes->post('/user/ubah', 'UserController::updateData');
$routes->get('/user/hapus/(:any)', 'UserController::delete');

$routes->get('/peminjam', 'PeminjamController::index');
$routes->get('/peminjam/tambah', 'PeminjamController::tambah');
$routes->post('/peminjam/tambah', 'PeminjamController::insertData');
$routes->get('/peminjam/ubah/(:any)', 'PeminjamController::ubah');
$routes->post('/peminjam/ubah', 'PeminjamController::updateData');
$routes->get('/peminjam/hapus/(:any)', 'PeminjamController::delete');

$routes->get('/kriteria', 'KriteriaController::index');
$routes->get('/kriteria/tambah', 'KriteriaController::tambah');
$routes->post('/kriteria/tambah', 'KriteriaController::insertData');
$routes->get('/kriteria/ubah/(:any)', 'KriteriaController::ubah');
$routes->post('/kriteria/ubah', 'KriteriaController::updateData');
$routes->get('/kriteria/hapus/(:any)', 'KriteriaController::delete');

$routes->get('/sub-kriteria', 'SubKriteriaController::index');
$routes->get('/sub-kriteria/tambah', 'SubKriteriaController::tambah');
$routes->post('/sub-kriteria/tambah', 'SubKriteriaController::insertData');
$routes->get('/sub-kriteria/ubah/(:any)', 'SubKriteriaController::ubah');
$routes->post('/sub-kriteria/ubah', 'SubKriteriaController::updateData');
$routes->get('/sub-kriteria/hapus/(:any)', 'SubKriteriaController::delete');

$routes->get('/proses', 'ProsesController::index');
$routes->get('/hasil', 'ProsesController::hasil');
