<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/{any}', [HomeController::class, 'index'])->where('any', '.*');

// Route::get('/home', [HomeController::class, 'index'])->name('home');
