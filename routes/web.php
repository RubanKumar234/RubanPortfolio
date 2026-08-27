<?php

use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'portfolio')->name('home');
Route::post('/contact', [ContactMessageController::class, 'store'])
    ->middleware('throttle:6,1')
    ->name('contact.store');

Route::get('/resume/download', [ResumeController::class, 'download'])->name('resume.download');
Route::get('/resume/manage', [ResumeController::class, 'showManage'])->name('resume.manage');
Route::post('/resume/manage', [ResumeController::class, 'upload'])
    ->middleware('throttle:6,1')
    ->name('resume.upload');
