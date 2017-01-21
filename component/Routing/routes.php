<?php

$router->get('/', 'HomeController@index');

$router->get('/about', 'AboutController@about');

$router->get('/greetings', function () {
    return 'Hello world';
});
