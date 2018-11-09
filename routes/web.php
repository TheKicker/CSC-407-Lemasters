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

// To be used as a placeholder on site
Route::get('/status', function(){
    return '<div align="center"><h1>Well, your site works but this aint it chief. </h1><br><img src="https://media.giphy.com/media/tLql6mMHC6wvK/giphy.gif">';
})->name('status');

//******************* STATIC PAGES *************************//

// About Us Page
Route::get('/about', function () {
    return view('about');
})->name('about');

// Admin Panel Page
Route::get('adminPanel', function () {
    return view('adminPanel');
})->name('adminPanel');

// Contact Page
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Home Page
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Library Page
Route::resource('/library', 'MovieController');

// Project Page
Route::get('/project', function () {
    return view('project');
})->name('project');

// User Profile Page
Route::get('/userProfile', function () {
    return view('userProfile');
})->name('userProfile');

//******************* MOVIE PAGES *************************//

Route::resource('/movie', 'MovieController');

//******************* KIOSK PAGES *************************//

Route::resource('/kiosk', 'KioskController');

//******************* INVENTORY PAGES *************************//

Route::resource('/inventory', 'InventoryController');

//Route::get('indexInventory', function () {
//    return view('indexInventory');
//})->name('indexInventory');
//
//Route::get('addInventory', function () {
//    return view('addInventory');
//})->name('addInventory');

//******************* AUTH PAGES *************************//

// Login Page
Route::get('/login', function () {
    return view('auth/login');
})->name('login');

// Register Page
Route::get('/register', function () {
    return view('auth/register');
});

Auth::routes();

//*****************************************************//


// Example from class using
// Route::resource('/people' , 'PersonController');

Route::get('/home', 'HomeController@index')->name('home');


// COMMAND: (php artisan make:controller ExampleController)
// Makes file at HTTP/controllers/ExampleController.php
Route::get('/example', 'ExampleController@list');
