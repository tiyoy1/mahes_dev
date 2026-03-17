<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/registration', RegistrationController::class);
Route::resource('/news', NewsController::class);
        