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

Route::resourceVerbs([
    'create' => 'cadastro',
    'edit' => 'editar'
]);

Route::get('/', function () {
    return view('welcome');
});

//Route::view('/form', 'form');

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
 * DELETE: Utilizado para remover recurso. Tem o comportamento bem semelhante ao do POST.
 *         Os dados ficam no corpo da requisição e não na URL.
 *
 *         Route::delete($uri, $callback);
 *
 * OPTIONS: Utilizado para descobrir quais os verbos são aceitos por uma URI.
 *          Pouco utilizado dentro da aplicação e faz mais sentido o uso em ambiente de desenvolvimento.
 *
 *          Route::options($uri, $callback);
 *
 * Passo a passo: Definir rota -> Criar controllador -> Criação de método -> Camada View
 *
 */

/**
 * GET
 */
//Route::get('/users/1', 'UserController@index');
//Route::get('/getData', 'UserController@getData');

/**
 * POST
 */
//Route::post('/postData', 'UserController@postData');

/**
 * PUT
 */
//Route::put('/users/1', 'UserController@testPut');

/**
 * PATCH
 */
//Route::patch('/users/1', 'UserController@testPatch');

/**
 * Math PUT/PATCH
 */
//Route::match(['put', 'patch'], '/users/2', 'UserController@testMatch');

/**
 * DELETE
 */
//Route::delete('/users/1', 'UserController@destroy');

/**
 * ANY
 */
//Route::any('/users', 'UserController@any');

/**
 * Rotas Resource
 *
 * Link da documentação de referência: https://laravel.com/docs/5.7/controllers#resource-controllers
 *
 * 1. Quanto você trabalha com resource, e precisa definir uma rota que não faz parte do agrupamento
 *    o correto é adicionar acima do objeto. Como no caso abaixo, o /posts/premium não é implementado
 *    pelo Route::resource, logo, está definido acima de sua chamada.
 *
 * 2. Quando você precisa sobrescrever uma rota que já faz parte do agrupamento, você deve definir
 *    imediatamente abaixo para evitar conflitos, isso está sendo exemplificado abaixo com a rota
 *    get em /posts.
 *
 * 3. Pode ser que você não precise implementar todas as rotas do sistema de recurso, nesse caso você
 *    pode trabalhar com o only (somente) ou com o except (exceto) informando um array com as posições
 *    que você precisar.
 *
 */

//Route::get('/posts/premium', 'PostController@premium');
//Route::resource('posts', 'PostController');
//Route::resource('posts', 'PostController')->only(['index', 'show']);
//Route::resource('posts', 'PostController')->except(['destroy']);
//Route::get('/posts', 'PostController@index');

//Route::get('/users', 'UserController@show');

/**
 * Tipos de Chamada
 *
 * Link da documentação de referência: https://laravel.com/docs/5.7/routing
 *
 * Controlador@método: É a forma mais utilizada para invocar um recurso específico que possui responsabilidade
 *                     clara e definida.
 *
 * Closure ou Função Anônima: É uma forma rápida de ter acesso aos recursos do framework, porém, fazendo
 *                            o uso desse tipo de recurso você acaba acoplando uma responsabilidade do
 *                            seu código dentro do seu arquivo de rotas.
 *                            Outra desvantagem é que não é aceito pelo sistema de cacheamento de rotas.
 *
 * View: De acordo com uma especificação de url (GET), é retornada uma visão (de dentro de resource/views).
 *
 * Fallback: Quanto o framework não consegue resolver uma rota, será encaminhado para a rota de fallback!
 *           Ambiente ideal para implementar a página 404 do sistema.
 *
 * Redirect: Para criar um redirecionamento, você deve informar qual a URI acessada e para onde deve ser
 *           redirecionado juntamente com o código HTTP. Por padrão o código é o 301!
 *
 * Nomeação: Ao implementar o nome nas rotas, você passa a ter um auxílio maior da IDE com o autocomplete
 *           e permite que os Controladores fiquem desacoplados de rotas fixas. Você passa a ter uma maior
 *           flexibilidade e tem um desenvolvimento mais ágil e padronizado.
 *
 */

Route::get('/users', function(){
    echo "Listagem dos usuários da minha base!";
});

Route::view('/form', 'form');

Route::fallback(function(){
    echo "<h1>Ooops! Seja muito bem vindo a nossa página 404. Nenhum registro foi encontrado.</h1>";
});

Route::redirect('/users/add', url('/form'), 301);

Route::get('/posts', 'PostController@index')->name('posts.index');
Route::get('/posts/index', 'PostController@indexRedirect')->name('posts.indexRedirect');
