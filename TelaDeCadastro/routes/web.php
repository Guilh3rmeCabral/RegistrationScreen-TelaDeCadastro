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

Route::get('/', function () {
    return view('welcome');
});

Route::get('cadastro-user', '\App\Http\Controllers\Form\CadastroController@formAddUser')->name('users.cadastroUser');


Route::post('cadastrousers/store', 'App\Http\Controllers\Form\CadastroController@cadastroStoreUser')->name('users.cadastrostore');
