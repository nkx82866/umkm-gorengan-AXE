<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductImageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/menu', function () {
    return view('menu');
})->name('menu');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Section Function = for admin log-in only
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('admin/product-categories', ProductCategoryController::class);
        Route::resource('admin/products', ProductController::class);
    });
});

Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
Route::get('/home', [CommentController::class, 'show'])->name('home');


require __DIR__.'/auth.php';
