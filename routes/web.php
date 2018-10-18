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

// Home Page
Route::get('/', function () {
    return view('welcome');
});

// About Us Page
Route::get('/about', function () {
    return view('about');
});

// Contact Page
Route::get('/contact', function () {
    return view('contact');
});

// Login Page
Route::get('/login', function () {
    return view('auth/login');
});

// Register Page
Route::get('/register', function () {
    return view('auth/register');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// COMMAND: (php artisan make:controller ExampleController)
// Makes file at HTTP/controllers/ExampleController.php
Route::get('/example', 'ExampleController@list');