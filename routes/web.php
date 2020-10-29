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
Route::get('/get_rooms/{id}', [App\Http\Controllers\RoomController::class, 'get_rooms'])->name('get-rooms');

//Room Routes
Route::get('/rooms', [App\Http\Controllers\RoomController::class, 'index'])->name('all-rooms');
Route::post('/room/store', [App\Http\Controllers\RoomController::class, 'store'])->name('store-room');
Route::get('/room/edit/{id}', [App\Http\Controllers\RoomController::class, 'edit'])->name('edit-room');
Route::get('/room/show/{id}', [App\Http\Controllers\RoomController::class, 'show'])->name('show-room');
Route::get('/room/create', [App\Http\Controllers\RoomController::class, 'create'])->name('create-room');
Route::get('/room/delete/{id}', [App\Http\Controllers\RoomController::class, 'delete'])->name('delete-room');
Route::put('/room/update/{id}', [App\Http\Controllers\RoomController::class, 'update'])->name('update-room');
Route::delete('/room/destroy/{id}', [App\Http\Controllers\RoomController::class, 'destroy'])->name('destroy-room');

//House Routes
Route::get('/houses', [App\Http\Controllers\HouseController::class, 'index'])->name('all-houses');
Route::post('/house/store', [App\Http\Controllers\HouseController::class, 'store'])->name('store-house');
Route::get('/house/edit/{id}', [App\Http\Controllers\HouseController::class, 'edit'])->name('edit-house');
Route::get('/house/show/{id}', [App\Http\Controllers\HouseController::class, 'show'])->name('show-house');
Route::get('/house/create', [App\Http\Controllers\HouseController::class, 'create'])->name('create-house');
Route::get('/house/delete/{id}', [App\Http\Controllers\HouseController::class, 'delete'])->name('delete-house');
Route::put('/house/update/{id}', [App\Http\Controllers\HouseController::class, 'update'])->name('update-house');
Route::delete('/house/destroy/{id}', [App\Http\Controllers\HouseController::class, 'destroy'])->name('destroy-house');

//Tenant Routes
Route::get('/tenants', [App\Http\Controllers\TenantController::class, 'index'])->name('all-tenants');
Route::post('/tenants/store', [App\Http\Controllers\TenantController::class, 'store'])->name('store-tenants');
Route::get('/tenants/edit/{id}', [App\Http\Controllers\TenantController::class, 'edit'])->name('edit-tenants');
Route::get('/tenants/show/{id}', [App\Http\Controllers\TenantController::class, 'show'])->name('show-tenants');
Route::get('/tenants/create', [App\Http\Controllers\TenantController::class, 'create'])->name('create-tenants');
Route::get('/tenants/delete/{id}', [App\Http\Controllers\TenantController::class, 'delete'])->name('delete-tenants');
Route::put('/tenants/update/{id}', [App\Http\Controllers\TenantController::class, 'update'])->name('update-tenants');
Route::delete('/tenants/destroy/{id}', [App\Http\Controllers\TenantController::class, 'destroy'])->name('destroy-tenants');


//Deposit and Rent Setting Routes
Route::get('/deposit-rent-settings', [App\Http\Controllers\DepositRentSettingsController::class, 'index'])->name('all-deposit-rent-settings');
Route::post('/deposit-rent-settings/store', [App\Http\Controllers\DepositRentSettingsController::class, 'store'])->name('store-deposit-rent-settings');
Route::get('/deposit-rent-settings/edit/{id}', [App\Http\Controllers\DepositRentSettingsController::class, 'edit'])->name('edit-deposit-rent-settings');
Route::get('/deposit-rent-settings/show/{id}', [App\Http\Controllers\DepositRentSettingsController::class, 'show'])->name('show-deposit-rent-settings');
Route::get('/deposit-rent-settings/create', [App\Http\Controllers\DepositRentSettingsController::class, 'create'])->name('create-deposit-rent-settings');
Route::get('/deposit-rent-settings/delete/{id}', [App\Http\Controllers\DepositRentSettingsController::class, 'delete'])->name('delete-deposit-rent-settings');
Route::put('/deposit-rent-settings/update/{id}', [App\Http\Controllers\DepositRentSettingsController::class, 'update'])->name('update-deposit-rent-settings');
Route::delete('/deposit-rent-settings/destroy/{id}', [App\Http\Controllers\DepositRentSettingsController::class, 'destroy'])->name('destroy-deposit-rent-settings');
