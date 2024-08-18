<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PalController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('/pals', PalController::class);
