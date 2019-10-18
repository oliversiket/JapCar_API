<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
$router->group(["prefix" => "brands"], function ($router) {
    

    $router->get("/", "Brands@index");

    $router->post("/", "Brands@store");

    $router->get("{brand}", "Brands@show");
    
    $router->put("{brand}", "Brands@update");

    $router->delete("{brand}", "Brands@destroy");   
    
    $router->get("{brand}/cars", "Cars@index");

    // $router->get("{car}", "Cars@show");

    // $router->put("{brand}/cars/", "Cars@update");

    $router->post("{brand}/cars", "Cars@store");
    
    // $router->delete("{car}", "Cars@destroy");
});

// $router->group(["prefix" => "cars"], function ($router) {

// });
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
