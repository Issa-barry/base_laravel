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

//View classique
Route::view('/', 'welcome');
Route::view('a-propos', 'a-propos');
Route::view('contact', 'contact');

/**===========================================================
 *                      CLIENTS 
 *============================================================*/
// Route::get('clients', 'ClientsController@index');
// Route::get('clients/create', 'ClientsController@create');
// Route::get('clients/{client}', 'ClientsController@show');//{client} ou {id} il faut rester coheren avec la function show($client) ou show($id)
// Route::get('/clients/{client}/edit', 'ClientsController@edit');
// Route::post('clients', 'ClientsController@store');
// Route::PATCH('clients/{client}', 'ClientsController@update');
// Route::delete('clients/{client}', 'ClientsController@destroy');
Route::resource('clients', 'ClientsController');//Cette ligne remplace tous ce qu'ont a mis en commentaire

/**===========================================================
 *                      CONATC 
 *============================================================*/
Route::get('/contact', 'ContactController@create');
Route::post('/contact', 'ContactController@store');

/**===========================================================
 *                      AUTHENTIFICATION 
 *============================================================*/