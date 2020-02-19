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
    return view('welcome');
});

// Passing values into template [can take values from a database and pass in]
Route::get('/contact', function () {
    return view('home.contact',["title"=>"Content Page"]);            //contacts.blade.php is in the subfolder home
    // $names = ["namal", "saman", "john"];
    // return view('home.contact',["contacts"=>$names]); 
});

// Passing arrays to template
Route::get('/about', function () {
    return view('home.about');            //about.blade.php is in the subfolder home
});
