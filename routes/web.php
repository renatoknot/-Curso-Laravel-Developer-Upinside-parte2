<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::view('/form', 'form');

/**
 *
 * Link da documentação de referência: https://laravel.com/docs/5.7/routing
 *
 * Definição de Rota
 * Route::verbo_http('URI', 'Controller@método');
 *
 * verbo_http = [GET, POST, PUT, PATCH, DELETE, OPTIONS];
 *
 * GET: Utilizado para obter dados do servidor e não altera o estado do recurso.
 *      Quando um formulário GET é disparado, os dados ficam presentes na URL.
 *
 *      Route::get($uri, $callback);
 *
 * POST: Utilizado para criação de recurso ou envio de dados ao servidor para validação.
 *       Os dados ficam no corpo da requisição e não na URL.
 *
 *       Route::post($uri, $callback);
 *
 * PUT: Utilizado para atualiação de recurso. O caminho da requisição deve conter o objeto a ser atualizado
 *      juntamente com todos os parâmetros do objeto para que possa ser feita a ação com sucesso.
 *      Deve-se usar o Form Method Spoofing (falsificação do verbo) [@method('PUT')]
 *
 *      Route::put($uri, $callback);
 *
 * PATCH: Utilizado para atualização parcial do recurso. Tem o mesmo funcionamento no PUT.
 *        Também trabalha com Form Method Spoofing (falsificação do verbo) [@method('PATCH')]
 *
 *        Route::patch($uri, $callback);
 *
    Route::delete($uri, $callback);
    Route::options($uri, $callback);
 *
 * Passo a passo: Definir rota -> Criar controllador -> Criação de método -> Camada View
 *
 */

/**
 * GET
 */
Route::get('/users/1', 'UserController@index');
Route::get('/getData', 'UserController@getData');

/**
 * POST
 */
Route::post('/postData', 'UserController@postData');

/**
 * PUT
 */
Route::put('/users/1', 'UserController@testPut');

/**
 * PATCH
 */
Route::patch('/users/1', 'UserController@testPatch');

/**
 * Math PUT/PATCH
 */
Route::match(['put', 'patch'], '/users/2', 'UserController@testMatch');
