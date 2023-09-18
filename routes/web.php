<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CountriesController;
use App\Http\Controllers\ProvinceController;
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

Route::get('/', function () {
    return view('auth.login');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::resource('userList', UserController::class);
Route::resource('/Management/Countries', CountriesController::class);
Route::resource('/Management/Province', ProvinceController::class);
Route::resource('/Management/City', CityController::class);

Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);

require __DIR__.'/auth.php';