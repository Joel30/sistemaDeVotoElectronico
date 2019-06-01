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

Route::get('persona', 'PersonaController@index')->name('persona.index');
Route::get('persona/nuevo', 'PersonaController@create')->name('persona.create');
Route::post('persona/guardar', 'PersonaController@store')->name('persona.store');

Route::get('persona/editar/{id}', 'PersonaController@edit')->name('persona.edit');
Route::put('persona/{persona}', 'PersonaController@update')->name('persona.update');
Route::get('persona/{persona}', 'PersonaController@destroy')->name('persona.destroy');


Route::get('candidato', 'CandidatoController@index')->name('candidato.index');
Route::get('candidato/nuevo', 'CandidatoController@create')->name('candidato.create');
Route::post('candidato/guardar', 'CandidatoController@store')->name('candidato.store');


Route::get('elector', 'ElectorController@index')->name('electot.index');
Route::get('elector/nuevo', 'ElectorController@create')->name('elector.create');
Route::post('elector/guardar', 'ElectorController@store')->name('elector.store');


Route::get('voto', 'VotoController@index')->name('voto.index');
Route::get('voto/candidatos', 'VotoController@enter')->name('voto.enter');
Route::post('voto/actualizar', 'VotoController@update')->name('voto.update');
Route::get('voto/resultado', 'VotoController@show')->name('voto.show');


Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/home', 'HomeController@index')->name('home');
