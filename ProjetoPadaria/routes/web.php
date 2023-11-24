<?php

use App\Http\Middleware\Authenticate;
use Illuminate\Auth\AuthenticationException;

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

// Route::get('/', function () {
//     return view('index');
// });



Route::get('/','IndexController@index');

Route::get('/grafico', 'GraficoController@index')->name('grafico');

Route::get('/produto-pag','ProdutoController@index');

Route::post('/produto-pag','ProdutoController@store');
Route::post('/index','ProdutoController@index');

Route::get('/produto/escolhido/{id}','ProdutoController@show');
Route::get('/produto/excluir/{idProduto}','ProdutoController@destroy');

Route::get('/grafico','VendaController@index');




Route::post('/usuario','Auth\RegisterController@store');
Route::get('/usuario', function () {
    return view('usuario');
});

Route::post('/login','Auth\RegisterController@verifyUser');
Route::get('/login', function () {
    return view('login');
});

Route::get('/logout','Auth\RegisterController@logoutUser');
Route::get('/index', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');



