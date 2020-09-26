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

Auth::routes();

//Route::get('/house/create', 'HouseController@create')->name('create-house');

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::get('/house', [App\Http\Controllers\HouseController::class, 'index'])->name('all-houses');
Route::post('/house/store', [App\Http\Controllers\HouseController::class, 'store'])->name('store-house');
Route::get('/house/edit/{id}', [App\Http\Controllers\HouseController::class, 'edit'])->name('edit-house');
Route::get('/house/create', [App\Http\Controllers\HouseController::class, 'create'])->name('create-house');
Route::put('/house/edit/{id}', [App\Http\Controllers\HouseController::class, 'update'])->name('update-house');


