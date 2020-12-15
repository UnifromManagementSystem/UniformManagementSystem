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

// 발주리스트 
Route::resource('orderlist', 'OrderListController');

Route::get('/uniformlist', function () {
    return view('user.uniformlist');
});

Route::get('/uniforminfo', function () {
    return view('user.uniforminfo');
})->name('uniforminfo');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
