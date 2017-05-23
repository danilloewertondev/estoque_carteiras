<?php
Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('/produtos', 'ProdutoController@lista');

Route::get('/produtos/novo', 'ProdutoController@novo');

Route::post('/produtos/adiciona', 'ProdutoController@adiciona');

Route::get('/produtos/remove/{id}', 'ProdutoController@remove');

Route::get('/produtos/busca/{id}', 'ProdutoController@busca');

Route::post('/produtos/alterado/{id}', 'ProdutoController@alterado');

Route::get('/referencias', 'ReferenciaController@lista');

Route::get('/referencias/novo', 'ReferenciaController@novo');

Route::post('/referencias/adiciona', 'ReferenciaController@adiciona');

Route::get('/referencias/busca/{id}', 'ReferenciaController@busca');

Route::post('/referencias/alterado/{id}', 'ReferenciaController@alterado');

Route::get('/referencias/remove/{id}', 'ReferenciaController@remove');