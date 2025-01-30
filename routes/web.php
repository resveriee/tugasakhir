<?php

use App\Http\Controllers\commentcontroll;
use App\Http\Controllers\econtroll;
use App\Http\Controllers\pcontroll;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\AdminMiddleware;

Route::get('/', [econtroll::class, 'index']);

Route::get('/product', [econtroll::class, 'product'])->name('product.search');

Route::get('/product/{id}', [econtroll::class, 'show'])->name('product.show');

Route::get('/contact', [econtroll::class, 'contact']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('product/{productId}/comments', [commentcontroll::class, 'store'])->name('comment.store');

Route::middleware(['auth'])->group(function () {
    Route::middleware(AdminMiddleware::class)->group(function () {
        Route::get('/admin/product/create', [pcontroll::class, 'create'])->name('admin.product.create');
        Route::post('/admin/product', [pcontroll::class, 'store'])->name('admin.product.store');
        Route::get('/admin/product/{id}/edit', [pcontroll::class, 'edit'])->name('admin.product.edit');
        Route::put('/admin/product/{id}', [pcontroll::class, 'update'])->name('admin.product.update');
        Route::delete('/admin/product/{id}', [pcontroll::class, 'destroy'])->name('admin.product.destroy');
    });
});

Route::post('/checkout/{id}', [pcontroll::class, 'processCheckout'])->name('checkout.process');
