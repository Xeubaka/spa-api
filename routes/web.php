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
    return $router->app->version();
});
$router->get('/vinho', 'VinhoController@index');
$router->group(['prefix' => 'vinho/'], function() use ($router)
{
  $router->post('add', 'VinhoController@createVinho');
  $router->put('view/{id}', 'VinhoController@updateVinho');
  $router->delete('delete/{id}', 'VinhoController@deleteVinho');
});
$router->get('/venda', 'VendaController@index');
$router->group(['prefix' => 'venda/'], function() use ($router)
{
  $router->post('add', 'VendaController@createVenda');
  $router->put('view/{id}', 'VendaController@updateVenda');
  $router->delete('delete/{id}', 'VendaController@deleteVenda');

});
$router->get('/pedido', 'PedidoController@index');
$router->group(['prefix' => 'pedido/'], function() use ($router)
{
  $router->post('add', 'PedidoController@createPedido');
  $router->put('view/{id}', 'PedidoController@updatePedido');
  $router->delete('delete/{id}', 'PedidoController@deletePedido');

});
