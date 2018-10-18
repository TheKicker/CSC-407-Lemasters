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

Route::get('/string', function(){

   return 'Hello World';
});

Route::get('/', function () {

    // phpinfo();
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// COMMAND: (php artisan make:controller ExampleController)
// Makes file at HTTP/controllers/ExampleController.php
Route::get('/example', 'ExampleController@list');