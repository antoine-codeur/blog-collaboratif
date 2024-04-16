<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Authenticated routes
Route::middleware(['auth'])->group(function () {
    // Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware('verified')->name('dashboard');

    // Profile routes
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // CRUD routes for posts
    Route::resource('posts', PostController::class);

    // My Posts
    Route::get('/my-posts', [PostController::class, 'myPosts'])->name('my.posts');
});

// Admin routes protected by 'role:admin' middleware
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('categories', CategoryController::class);
});

// Static pages accessible without authentication
Route::view('/about', 'about')->name('about');
Route::view('/legal', 'legal')->name('legal');

// Authentication routes from Breeze
require __DIR__.'/auth.php';
