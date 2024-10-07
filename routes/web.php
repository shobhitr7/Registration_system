<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('fetch-states', [App\Http\Controllers\LocationController::class, 'fetchStates']);
Route::post('fetch-cities', [App\Http\Controllers\LocationController::class, 'fetchCities']);

Route::get('/city-list', [App\Http\Controllers\CityController::class, 'index']);
Route::get('/city-data', [App\Http\Controllers\CityController::class, 'getCityData'])->name('city.data');

Route::get('register', [App\Http\Controllers\RegisterController::class, 'showRegistrationForm'])->name('register');

