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
    return '<div align="center"><h1>Well, your site works but this aint it chief. </h1><br><img src="https://media.giphy.com/media/tLql6mMHC6wvK/giphy.gif">';
})->name('status');

// Home Page
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Library Page
Route::get('/library', function () {
    return view('library');
})->name('library');

// Admin Panel Page
Route::get('adminPanel', function () {
    return view('adminPanel');
})->name('adminPanel');

// About Us Page
Route::get('/about', function () {
    return view('about');
})->name('about');

// Movie Routes
Route::resource('/movies', 'MovieController');

 // Add Movie Page
 Route::get('addMovie', function () {
     return view('movies/addMovie');
 })->name('addMovie');

 // Movie Index Page
 Route::get('indexMovie', function () {
     return view('movies/indexMovie');
 })->name('indexMovie');

// Kiosk Index Page
Route::resource('/kiosks', 'KioskController');

// Index Kiosk Page
Route::get('indexKiosk', function () {
    return view('kiosks/indexKiosk');
})->name('indexKiosk');

// Add Kiosk Page
Route::resource('/addKiosk', 'KioskController');

// Add Kiosk Page
Route::get('addKiosk', function () {
  return view('kiosks/addKiosk');
})->name('addKiosk');

// Add Inventory Page
Route::get('addInventory', function () {
    return view('inventory/addInventory');
})->name('addInventory');

// Inventory Index Page
Route::get('indexInventory', function () {
    return view('inventory/indexInventory');
})->name('indexInventory');

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

// Movie Page
Route::resource('/movie', 'MovieController');
//Route::resource('/updateMovie', 'MovieController');

//Update Movie Page
Route::get('updateMovie', function () {
    return view('movie/updateMovie');
})->name('updateMovie');

Auth::routes();

// Example from class using
// Route::resource('/people' , 'PersonController');

Route::get('/home', 'HomeController@index')->name('home');


// COMMAND: (php artisan make:controller ExampleController)
// Makes file at HTTP/controllers/ExampleController.php
Route::get('/example', 'ExampleController@list');
