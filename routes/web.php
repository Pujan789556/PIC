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

//route for home page
Route::get('/home',function()
{
	return view('home');
});


//route for login page
Route::get('/', function () {
    return view('login');
});

//route for transaction entry page
Route::get('/transaction','transactionController@create');
	

//route for login controller 
Route::post('/login','loginController@login');


//route for transaction entry submit
Route::post('/transaction','transactionController@submit');