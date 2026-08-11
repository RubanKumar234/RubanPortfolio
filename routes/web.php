<?php

use App\Http\Controllers\ContactMessageController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'portfolio')->name('home');
Route::post('/contact', [ContactMessageController::class, 'store'])
    ->middleware('throttle:6,1')
    ->name('contact.store');
