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

use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test', function(){return "goodbye";} );

Route::get('/opdrachtenweb', 'ShowOpdrachtenWebController');

Route::resource('/cursussen', 'CursusController');

Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
Route::get('/moderator', 'ModeratorController@index')->name('moderator')->middleware('moderator');
Route::get('/docenten', 'DocentenController@index')->name('docenten')->middleware('docenten');
Route::get('/leerlingen', 'LeerlingenController@index')->name('leerlingen')->middleware('leerlingen');

?>
