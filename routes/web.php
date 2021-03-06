<?php

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

// User Routes

Route::get('/login', 'loginController@loginView');
Route::post('/login',['uses'=>'LoginController@verify']);

Route::resource('employer','EmployeerController');

Route::middleware('sess')->middleware('type')->resource('employer','EmployeerController');
