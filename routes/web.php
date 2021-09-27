<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MedicController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\StripePaymentController;


// Frontend Controller
Route::get('/', [FrontendController::class, 'index']);
Route::get('/products-courses', [FrontendController::class, 'products']);
Route::get('/product-details/{id}', [FrontendController::class, 'productDetails'])->name('product.details');
Route::get('/course-details/{id}', [FrontendController::class, 'courseDetails'])->name('course.details');
Route::get('/about-us', [FrontendController::class, 'about'])->name('frontend.about');

// Cart Controller 
Route::any('/cart/store', [CartController::class, 'store'])->name('cart.store');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::get('/cart/{coupon_name}', [CartController::class, 'index']);
// Route::any('/cart/store', 'App\Http\Controllers\CartController@store')->name('cart.store');
Route::get('/cart/{cart_id}/delete', [CartController::class, 'delete'])->name('cart.delete');
Route::post('/cart/update', [CartController::class, 'cartUpdate'])->name('cart.custom.update');


// Checkout Controller 
Route::get('stripe', [StripePaymentController::class, 'stripe']);
Route::post('stripe', [StripePaymentController::class, 'stripePost'])->name('stripe.post');
Route::get('checkout', [CheckoutController::class, 'index'])->name('checkout.index'); 
Route::post('/order', [CheckoutController::class, 'order'])->name('order.store');


// Admin Prefix 
Route::group(['prefix' => 'admin'], function () {

        //Admin Controller
        Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

        //Faq Controller
        Route::get('/faq', [FaqController::class, 'index'])->name('faq.index');
        Route::post('/faq-store', [FaqController::class, 'store'])->name('faq.store');
        Route::get('/faq/edit/{id}', [FaqController::class, 'edit'])->name('faq.edit');
        Route::post('/faq-update', [FaqController::class, 'update'])->name('faq.update');
        Route::get('/faq-view/{id}', [FaqController::class, 'view'])->name('faq.view');
        Route::get('/faq-delete/{id}', [FaqController::class, 'delete'])->name('faq.delete');


        // CategoryController 
        Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
        Route::post('/categories-store', [CategoryController::class, 'store'])->name('categories.store');
        Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
        Route::post('/categories/update', [CategoryController::class, 'update'])->name('categories.update');
        Route::get('/categories/{id}/delete', [CategoryController::class, 'delete'])->name('categories.delete');

        // SubCategoryController
        Route::resource('subCategories', SubCategoryController::class);



});

// User Prefix 
Route::group(['prefix' => 'user'], function () {

        // User dashboard
        Route::get('/dashboard', function () {

                return redirect('/');
        })->name('user.dashboard');

});

// Medic Prefix 
Route::group(['prefix' => 'medic'], function () {
              // Medic dashboard
        Route::get('/dashboard', [MedicController::class, 'index'])->name('medic.dashboard');  
        Route::get('/my-items', [MedicController::class, 'myItems'])->name('medic.items');
        Route::get('/my-settings', [MedicController::class, 'mySettings'])->name('medic.settings');
        Route::get('/my-profile', [MedicController::class, 'myProfile'])->name('medic.profile');

        // ProductController 
        Route::post('get-sub-category', [ProductController::class, 'getsubcategory'])->name('getsub');
        Route::get('update-multiple-image/{id}/update', [ProductController::class, 'updateMultiple'])->name('update.multiple');
        Route::post('replace-multiple-image/update', [ProductController::class, 'replaceMultiple'])->name('replace.multiple');
        // Route::get('/product-multiple-image/edit', [ProductController::class, 'editMultiple'])->name('edit.multiple');
        Route::resource('products', ProductController::class);

        // CourseController 
        Route::get('/course-create', [CourseController::class, 'create'])->name('course.create');
        Route::post('/course-store', [CourseController::class, 'store'])->name('course.store');

});
