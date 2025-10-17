<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });
 Auth::routes();

Route::get('/', function () {
    return view('home');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
