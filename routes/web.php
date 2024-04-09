<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Page d'accueil
Route::get('/', [HomeController::class, 'index'])->name('home');

// Dashboard (avec authentification et vérification)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profil utilisateur
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Posts
Route::resource('posts', PostController::class);
Route::get('/post/{id}', [PostController::class, 'show'])->name('post.show');

// Pages statiques
Route::get('/about', function () { return view('about'); })->name('about');
Route::get('/legal', function () { return view('legal'); })->name('legal');

// Inclure les routes d'authentification de Breeze
require __DIR__.'/auth.php';
