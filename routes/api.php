<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LocationController;

Route::post('fetch-states', [App\Http\Controllers\LocationController::class, 'fetchStates']);
Route::post('fetch-cities', [App\Http\Controllers\LocationController::class, 'fetchCities']);

