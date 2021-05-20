<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;



Route::get('/', [FrontendController::class, 'index']);

Route::get('/about', [FrontendController::class, 'about'])->middleware(['auth', 'verified']); 

Route::get('/contact', [FrontendController::class, 'contact']);






Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');
