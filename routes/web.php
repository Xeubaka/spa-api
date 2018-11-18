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
$router->get('/Vinhos', 'VinhosController@index');
$router->group(['prefix' => 'Vinhos/'], function() use ($router)
{
  $router->get('view/{id}', 'VinhosController@findVinhos');
  $router->get('lastId', 'VinhosController@lastId');
  $router->post('add', 'VinhosController@createVinhos');
  $router->put('view/{id}', 'VinhosController@updateVinhos');
  $router->delete('delete/{id}', 'VinhosController@deleteVinhos');
});
$router->get('/Pedidos', 'PedidosController@index');
$router->group(['prefix' => 'Pedidos/'], function() use ($router)
{
  $router->get('view/{id}', 'PedidosController@findPedidos');
  $router->get('lastId', 'PedidosController@lastID');
  $router->post('add', 'PedidosController@createPedidos');
  $router->put('view/{id}', 'PedidosController@updatePedidos');
  $router->delete('delete/{id}', 'PedidosController@deletePedidos');

});
$router->get('/Produtos', 'ProdutosController@index');
$router->group(['prefix' => 'Produtos/'], function() use ($router)
{
  $router->get('view/{id}', 'ProdutosController@findProdutos');
  $router->get('lastId', 'ProdutosController@lastId');
  $router->post('add', 'ProdutosController@createProdutos');
  $router->put('view/{id}', 'ProdutosController@updateProdutos');
  $router->delete('delete/{id}', 'ProdutosController@deleteProdutos');

});
