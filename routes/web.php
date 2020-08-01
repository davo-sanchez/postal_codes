<?php

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

$router->get('/', function () use ($router) {
    return 'para usar la API inegresa en la URL los parametros: /api/{codigo_postal}/isfrom';
});

$router->group(['prefix' => 'api'], function($router){
    $router->get('{code}/isfrom','PostalCodeController@isFrom');
});