<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Requirement 4 & 5: 3 Route Custom (/, /about, /contact) + Data Dinamis
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Bonus: Route Parameter /hello/{nama}
Route::get('/hello/{nama}', [PageController::class, 'hello'])->name('hello');