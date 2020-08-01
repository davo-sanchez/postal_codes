<?php
use Illuminate\Support\Facades\DB;

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
    return DB::table('neighborhood_postal_codes')
    ->select(
        'states.name as state_name',
        'cities.name as city_name',
        'neighborhoods.name as neighborhood_name',
        'postal_codes.code as postal_code'
        )
    ->join('neighborhoods','neighborhood_postal_codes.neighborhood_id','=','neighborhoods.id')
    ->join('postal_codes','neighborhood_postal_codes.postal_code_id','=','postal_codes.id')
    ->join('cities','neighborhoods.city_id','=','cities.id')
    ->join('states','cities.state_id','=','states.id')
    ->where('code','96580')
    ->get();
});

$router->group(['prefix' => 'api'], function($router){
    $router->get('{code}/isfrom','PostalCodeController@isFrom');
});