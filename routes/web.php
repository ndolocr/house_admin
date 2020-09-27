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

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

//House Routes
Route::get('/houses', [App\Http\Controllers\HouseController::class, 'index'])->name('all-houses');
Route::post('/house/store', [App\Http\Controllers\HouseController::class, 'store'])->name('store-house');
Route::get('/house/edit/{id}', [App\Http\Controllers\HouseController::class, 'edit'])->name('edit-house');
Route::get('/house/show/{id}', [App\Http\Controllers\HouseController::class, 'show'])->name('show-house');
Route::get('/house/create', [App\Http\Controllers\HouseController::class, 'create'])->name('create-house');
Route::get('/house/delete/{id}', [App\Http\Controllers\HouseController::class, 'delete'])->name('delete-house');
Route::put('/house/update/{id}', [App\Http\Controllers\HouseController::class, 'update'])->name('update-house');
Route::delete('/house/destroy/{id}', [App\Http\Controllers\HouseController::class, 'destroy'])->name('destroy-house');

//Room Routes
Route::get('/rooms', [App\Http\Controllers\RoomController::class, 'index'])->name('all-rooms');
Route::post('/room/store', [App\Http\Controllers\RoomController::class, 'store'])->name('store-room');
Route::get('/room/edit/{id}', [App\Http\Controllers\RoomController::class, 'edit'])->name('edit-room');
Route::get('/room/show/{id}', [App\Http\Controllers\RoomController::class, 'show'])->name('show-room');
Route::get('/room/create', [App\Http\Controllers\RoomController::class, 'create'])->name('create-room');
Route::get('/room/delete/{id}', [App\Http\Controllers\RoomController::class, 'delete'])->name('delete-room');
Route::put('/room/update/{id}', [App\Http\Controllers\RoomController::class, 'update'])->name('update-room');
Route::delete('/room/destroy/{id}', [App\Http\Controllers\RoomController::class, 'destroy'])->name('destroy-room');
