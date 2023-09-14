<?php

use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Auth::routes();

Route::get('/users', [UserController::class, 'index'])->name('users.index')->middleware('is.admin');
Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show')->middleware('is.admin');
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit')->middleware('is.admin');
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update')->middleware('is.admin');

Route::get('/admin-check', function () {
    return view('admin-check');
})->name('admin.check')->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
