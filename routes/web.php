<?php
use App\Http\Controllers\ProdutosController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Produto;

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

Route::get('/', '\App\Http\Controllers\ProdutosController@inicio'); 
 
// ROTA DE CRIAÇÃO DO PRODUTO COM CONTROLLER
Route::post('/cadastrar-produto','\App\Http\Controllers\ProdutosController@salvarProdutoNoBanco');
 
//ROTA DE LEITURA DO PRODUTO COM CONTROLLER
Route::get('/ver-produto/{id}','\App\Http\Controllers\ProdutosController@verProdutoNoBanco');

//ROTA DE EDIÇÃO DE PRODUTO
Route::get('/editar-produto/{id}','\App\Http\Controllers\ProdutosController@editarProdutoNoBanco'); 

 // ROTA DE EDIÇÃO DO PRODUTO 2
Route::post('/editar-produto/{id}','\App\Http\Controllers\ProdutosController@atualizarProdutoNoBanco');
  
 // ROTA DE EXCLUSÃO DO PRODUTO
 Route::get('/excluir-produto/{id}','\App\Http\Controllers\ProdutosController@deletarProdutoNoBanco');  
  
 
