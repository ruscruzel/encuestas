<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

Route::view('/', 'home')->name('home');
Route::post('sendEncuesta', [HomeController::class, 'store'])->name('sendEncuesta');