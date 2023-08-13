<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get("user/{id}",[\App\Http\Controllers\UserController::class,"index"]);
