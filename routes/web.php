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
        return 'hello';
    });

    $router->get('/card/search/vin/{vin}', 'CardController@searchCardByVIN');
    $router->get('/card/search/number/{number}', 'CardController@searchCardByGosNumber');
    $router->get('/card/search/kuzov/{kuzov}', 'CardController@searchCardByKuzov');
    $router->post('/card', 'CardController@store');
    $router->get('/card', function () use ($router) {
        return 'hello';
    });
