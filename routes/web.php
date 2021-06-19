<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\FaqController;
use Illuminate\Support\Facades\Route;


// Frontend Controller
Route::get('/', [FrontendController::class, 'index']);



//Admin Controller
Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

//Faq Controller
Route::get('/faq', [FaqController::class, 'index'])->name('faq.index');
Route::get('/faq/edit/{id}', [FaqController::class, 'edit'])->name('faq.edit');
Route::post('/faq-update', [FaqController::class, 'update']);
Route::get('/faq-delete/{id}', [FaqController::class, 'delete']);
Route::post('/faq-store', [FaqController::class, 'store']);


// CategoryController 
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::post('/categories-store', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::post('/categories/update', [CategoryController::class, 'update'])->name('categories.update');
