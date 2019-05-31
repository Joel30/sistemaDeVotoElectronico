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
