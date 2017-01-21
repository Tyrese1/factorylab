<?php

// -------------------------------------------------
// Define your middlewares here.
// -------------------------------------------------

$router->middleware('auth', App\Http\Middleware\Authenticate::class);


// -------------------------------------------------
// Define your routes here.
// -------------------------------------------------

$router->get('/', 'HomeController@index');

$router->get('/about', 'HomeController@about');
$router->get('/pricing', 'HomeController@pricing');

$router->get('/contributors', 'HomeController@contributors');

$router->get('/contact', 'HomeController@contact');

$router->get('/login', 'HomeController@login');

$router->post('/login/authenticate', 'AccessController@Authenticate');

$router->get('/download','HomeController@download');

$router->get('/demo', 'HomeController@demo');
