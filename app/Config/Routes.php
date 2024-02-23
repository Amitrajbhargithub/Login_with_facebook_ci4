<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index'); //login page
$routes->get('/profile', 'Home::profile');  //profile page
$routes->get('/authWithFB', 'Home::authWithFB');
$routes->get('/logout', 'Home::logout');

