<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/users1', 'User1Controller@index');
    $router->get('/users1/{id}', 'User1Controller@show');
    $router->put('/users1/{id}', 'User1Controller@update'); // update user record
    $router->delete('/users1/{id}', 'User1Controller@delete'); //sdelete record

$router->get('/users2', 'User2Controller@index');
    $router->get('/users2/{id}', 'User2Controller@show');
    $router->put('/users2/{id}', 'User2Controller@update'); // update user record
    $router->delete('/users2/{id}', 'User2Controller@delete'); //sdelete record