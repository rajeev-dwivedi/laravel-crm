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
    return view('login');
});

Route::get('/dashboard', function() {
    // return 'Hello dashboard';
    return view('dashboard');
});

Route::post('loginSubmit', function() {
    echo "welcome dashboard";
    return redirect('dashboard');
});

// Route::post('/loginSubmit', 'UserController@index');

