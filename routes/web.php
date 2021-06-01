<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\FaqController;
use Illuminate\Support\Facades\Route;


// Frontend Controller
Route::get('/', [FrontendController::class, 'index']);



//Admin Controller
Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

//Faq Controller
Route::get('/faq', [FaqController::class, 'index']);
