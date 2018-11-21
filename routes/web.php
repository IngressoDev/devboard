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
  return view('default.test');
});

Route::prefix(config('app.admin_path'))->group(function() {
  Route::middleware(['checkPermissions:Administrator'])->group(function() {
    Route::get('/', function () {
      return view('admin');
    })->name('index');
  });
});

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/admin', 'AdminController@index')->name('admin');

Auth::routes();
