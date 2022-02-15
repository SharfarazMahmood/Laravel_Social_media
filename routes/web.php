<?php

use App\Http\Controllers\UserController;
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

Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('home');
    Route::get('/dashboard', [UserController::class, 'getDashboard'])->middleware('auth');

    Route::post('/signin', [UserController::class, 'postSignIn']);
    Route::post('/signup', 'App\Http\Controllers\UserController@postSignUp');
});
