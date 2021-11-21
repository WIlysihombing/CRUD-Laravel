<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::resource('artikel', 'ArticleController');

Route::get('/artikel', 'ArticleController@index')->name('artikel');

Route::get('/artikel/create', 'ArticleController@create')->name('create');

Route::get('/artikel/{slug}', 'ArticleController@show');

Route::post('/artikel', 'ArticleController@store');

Route::get('/artikel/{id}/edit', 'ArticleController@edit');

Route::put('/artikel/{id}', 'ArticleController@update');

Route::delete('/artikel/{id}', 'ArticleController@destroy');






