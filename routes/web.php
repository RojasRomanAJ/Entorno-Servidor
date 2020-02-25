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
    return 'Home';
});

Route::get('/usuarios', 'UserControler@index')
    ->name('users');

Route::get('/usuarios/detalles/{user}', 'UserControler@show')
    ->where('user', '[0-9]+')
    ->name('users.show');

Route::get('/usuarios/nuevo', 'UserControler@create')->name('user.create');

Route::post('usuarios/crear', 'UserControler@store');

Route::get('/saludo/{name}/{nickname?}', 'WelcomeUserController');
