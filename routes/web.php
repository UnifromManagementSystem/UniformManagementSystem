<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\UniformController;

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
Route::resource('orderlist', 'OrderListController');

// 유니폼 리스트
Route::get('/uniformlist', 'UniformController@index');
Route::get('/uniformlist/{product_number}', [UniformController::class, 'show']);

// 유니폼 구매
Route::post('/uniformlist/{product_number}', [UniformController::class, 'store']);



// 사용자 가입
Route::post('auth/register','UsersController@store');

// 사용자 로그인
Route::post('auth/login','SessionsController@store');

// 사용자 로그아웃
Route::get('auth/logout','SessionsController@destroy');

