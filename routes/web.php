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

Route::get('/', 'HomeController@index');

Route::get('/usuarios', 'UserControler@index')
    ->name('users');

Route::get('/usuarios/{user}', 'UserControler@show')
    ->where('user', '[0-9]+')
    ->name('users.show');

Route::get('/usuarios/nuevo', 'UserControler@create')->name('user.create');

Route::post('usuarios', 'UserControler@store');

Route::get('/usuarios/{user}/editar', 'UserControler@edit')->name('users.edit');

Route::put('/usuarios/{user}', 'UserControler@update');

Route::get('/saludo/{name}/{nickname?}', 'WelcomeUserController');

Route::delete('/usuarios/{user}', 'UserControler@destroy')->name('users.destroy');

Route::get('/productos', 'ProductController@index')
    ->name('products.index');

Route::get('/productos/{product}', 'ProductController@show')
    ->where('product', '[0-9]+')
    ->name('products.show');

Route::get('/productos/nuevo', 'ProductController@create')->name('products.create');

Route::post('/productos', 'ProductController@store');

Route::get('/productos/{product}/editar', 'ProductController@edit')->name('products.edit');

Route::put('/productos/{product}', 'ProductController@update');

Route::delete('/productos/{product}', 'ProductController@destroy')->name('products.destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
