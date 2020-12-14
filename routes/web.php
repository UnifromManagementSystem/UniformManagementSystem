<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;



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
})->name('home');

// 발주리스트 
Route::get('/orderlist', function () {
    return view('admin.orderlist');
});


Route::get('/uniformlist', function () {
    return view('user.uniformlist');
});

Route::get('/uniforminfo', function () {
    return view('user.uniforminfo');
})->name('uniforminfo');


// 사용자 가입
Route::post('auth/register','UsersController@store');

// 사용자 로그인
Route::post('auth/login','SessionsController@store');