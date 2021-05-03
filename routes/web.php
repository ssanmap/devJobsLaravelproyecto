<?php

use App\Http\Controllers\VacanteController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes( ['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
// rutas protegidas

Route::group(['middleware' => ['auth', 'verified']], function(){

Route::get('vacantes', 'VacanteController@index')->name('vacantes.index');
Route::get('vacantes/create', 'VacanteController@create')->name('vacantes.create');
Route::post('vacantes', 'VacanteController@store')->name('vacantes.store');
// subir imagenes
Route::post('vacantes/imagen', 'VacanteController@imagen')->name('vacantes.imagen');
Route::post('vacantes/borrarimagen', 'VacanteController@borrarimagen')->name('vacantes.borrar');
});

// muestra los trabajos en el fronen
Route::get('vacantes/{vacante}', 'VacanteController@show')->name('vacantes.show');


