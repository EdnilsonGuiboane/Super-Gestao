<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PrincipalController@principal')->name('site.index');

route::get('/sobrenos', 'SobrenosController@sobrenos')->name('site.sobrenos');

route::get('/contato', 'ContatoController@contato')->name('site.contato');
route::post('/contato', 'ContatoController@salvar')->name('site.contato');


route::get('/login', function(){ return 'login';})->name('site.login');

//App usando prefixo "/app" para agrupar 
Route::prefix('/app')->group(function(){

    route::get('/cliente', function(){ return 'cliente';})->name('app.cliente');
    route::get('/fornecedores', 'FornecedorController@index')->name('app.fornecedores');
    route::get('/produtos', function(){ return 'produtos';})->name('app.produtos');

});

Route::get('/rota1', function(){
    echo 'rota1';
})->name('site.rota1');

route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');

//routa de fallback

Route::fallback(function(){
    echo 'A rota acessada nao existe. <a href ="'.route('site.index').'">clique aqui </a> para ir a pagina inicial';
});

