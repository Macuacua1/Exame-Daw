<?php

use App\User;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user', 'UserController@index')->name('user.index');
Route::get('/user/details/{id}', 'UserController@details')->name('user.details');
Route::get('/user/add', 'UserController@add')->name('user.add');
Route::get('/user/addug/{id}', 'UserController@addug')->name('user.addug');
Route::post('/user/insert', 'GrupoController@insert')->name('grupo.insert');
Route::post('/user/insertug', 'UserController@insertug')->name('user.insertug');
Route::get('/user/edit/{id}', 'UserController@edit')->name('user.edit');
Route::post('/user/update/{id}', 'UserController@update')->name('user.update');
Route::get('/user/delete/{id}', 'UserController@delete')->name('user.delete');
Route::get('/user/ugdelete/{id}', 'UserController@ugdelete')->name('user.ugdelete');


Route::get('/grupo', 'GrupoController@index')->name('grupo.index');
Route::get('/grupo/details/{id}', 'GrupoController@details')->name('grupo.details');
Route::get('/grupo/add', 'GrupoController@add')->name('grupo.add');
Route::post('/grupo/insert', 'GrupoController@insert')->name('grupo.insert');
Route::get('/grupo/edit/{id}', 'GrupoController@edit')->name('grupo.edit');
Route::post('/grupo/update/{id}', 'GrupoController@update')->name('grupo.update');
Route::get('/grupo/delete/{id}', 'GrupoController@delete')->name('grupo.delete');