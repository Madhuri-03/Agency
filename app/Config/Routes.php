<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/blog', 'Home::blog');
$routes->get('/blog-single', 'Home::blog_single');
$routes->get('/portfolio-details', 'Home::portfolio_details');
$routes->get('/inner-page', 'Home::inner_page');
$routes->get('/admin', 'Admin::index');
$routes->get('/admin/register', 'Admin::register');
$routes->get('/admin/register', 'Signup::index');
$routes->get('register/store', 'Signup::store');
$routes->post('register/store', 'Signup::store');

//$routes->match(['get','post'],'register/store', 'Signup::store');





