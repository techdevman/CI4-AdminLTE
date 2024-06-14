<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/tasks', 'Task::index');
$routes->get('/task/create', 'Task::create');
$routes->post('/task/store', 'Task::store');
$routes->get('/task/edit/(:num)', 'Task::edit/$1');
$routes->post('/task/update/(:num)', 'Task::update/$1');
$routes->get('/task/delete/(:num)', 'Task::delete/$1');
