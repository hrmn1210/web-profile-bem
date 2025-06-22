<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// Home
$routes->get('/', 'Home::index');

// Anggota
$routes->get('/anggota', 'Anggota::index');
$routes->get('/anggota/create', 'Anggota::create');
$routes->post('/anggota/store', 'Anggota::store');
$routes->get('/anggota/edit/(:num)', 'Anggota::edit/$1');
$routes->post('/anggota/update/(:num)', 'Anggota::update/$1');
$routes->get('/anggota/delete/(:num)', 'Anggota::delete/$1');

// Blog
$routes->get('/blog', 'Blog::index');
$routes->get('/blog/create', 'Blog::create');
$routes->post('/blog/store', 'Blog::store');
$routes->get('/blog/edit/(:num)', 'Blog::edit/$1');
$routes->post('/blog/update/(:num)', 'Blog::update/$1');
$routes->get('/blog/delete/(:num)', 'Blog::delete/$1');

$routes->get('/galeri', 'Galeri::index');
$routes->get('/galeri/create', 'Galeri::create');
$routes->post('/galeri/store', 'Galeri::store');
$routes->get('/galeri/edit/(:num)', 'Galeri::edit/$1');
$routes->post('/galeri/update/(:num)', 'Galeri::update/$1');
$routes->get('/galeri/delete/(:num)', 'Galeri::delete/$1');
$routes->get('/galeri/(:num)', 'Galeri::detail/$1');
