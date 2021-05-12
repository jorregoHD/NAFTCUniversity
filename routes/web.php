<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Console\Input\Input;
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

Route::get('/NAFTCUniversity-login', function () {
    return view('login');
});

Route::any('/search',function(){
    //$q = Input::get ( 'searchInput' );
    //if(isset($q))
        return view('search');
    //else return view ('welcome');
});
