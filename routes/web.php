<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/history', [FrontendController::class, 'history'])->name('history');
Route::get('/rooms', [FrontendController::class, 'rooms'])->name('rooms');
Route::get('/gallery', [FrontendController::class, 'gallery'])->name('gallery');
Route::get('/experiences', [FrontendController::class, 'experiences'])->name('experiences');
Route::get('/visit', [FrontendController::class, 'visit'])->name('visit');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');