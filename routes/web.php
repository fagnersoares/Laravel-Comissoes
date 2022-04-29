<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/entrar', 'App\Http\Controllers\SegurancaController@entrar');
Route::post('/entrar', 'App\Http\Controllers\SegurancaController@login');

Route::get('/registrar', 'App\Http\Controllers\SegurancaController@registrar');
Route::post('/registrar', 'App\Http\Controllers\SegurancaController@salvarUsuario');

Route::get('/home','App\Http\Controllers\HomeController@home')->name('home');

Route::get('/clientes','App\Http\Controllers\ClientesController@index')->name('lista_clientes');
Route::post('/clientes','App\Http\Controllers\ClientesController@salvar')->name('lista_clientes');

Route::get('/lojas','App\Http\Controllers\LojasController@index')->name('lista_lojas');

Route::get('/sair', function(){
    Auth::logout();
    return redirect('/entrar');
});


Route::get('/', function () {
    return view('home');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
