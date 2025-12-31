<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();


Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/platform', [PageController::class, 'platform'])->name('platform');
Route::get('/plan', [PageController::class, 'plan'])->name('plan');