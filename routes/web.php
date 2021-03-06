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
Auth::routes();
Route::post('etudiant/add', 'EtudiantController@add')->name('addEtudiant');
Route::get('etudiant/show/{id}', 'EtudiantController@show')->name('showEtudiant')->where('id', '[0-9]+');
Route::get('etudiant/edit/{id}', 'EtudiantController@edit')->name('editEtudiant')->where('id', '[0-9]+');
Route::put('etudiant/update/{id}', 'EtudiantController@update')->name('updateEtudiant')->where('id', '[0-9]+');
Route::put('etudiant/delete/{id}', 'EtudiantController@delete')->name('deleteEtudiant')->where('id', '[0-9]+');


Route::get('/home', 'HomeController@index')->name('home');
//Route::name('language')->get('language/{lang}', 'HomeController@language');
