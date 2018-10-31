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

// To check on functional status of website
Route::get('/status', function(){
    return '<div align="center"><h1>Website is functional</h1><br><img src="https://www.bing.com/th?id=OGC.4378089454e64eed28535feddb548cbf&pid=1.7&rurl=https%3a%2f%2fmedia.giphy.com%2fmedia%2fbTzFnjHPuVvva%2fgiphy.gif&ehk=5JHq8PHHOxaWwy33mfTEoQ"></div>';
});

// Home Page
Route::get('/', function () {
    return view('welcome');
});

// Library Page
Route::get('/library', function () {
    return view('library');
})->name('library');

// About Us Page
Route::get('/about', function () {
    return view('about');
})->name('about');

// Contact Page
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Project Page
Route::get('/project', function () {
    return view('project');
})->name('project');

//// Login Page
Route::get('/login', function () {
    return view('auth/login');
});

// Register Page
Route::get('/register', function () {
    return view('auth/register');
});



Auth::routes();

// Example from class using
// Route::resource('/people' , 'PersonController');

Route::get('/home', 'HomeController@index')->name('home');


// COMMAND: (php artisan make:controller ExampleController)
// Makes file at HTTP/controllers/ExampleController.php
Route::get('/example', 'ExampleController@list');