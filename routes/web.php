<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Page d'accueil
Route::get('/', [HomeController::class, 'index'])->name('home');

// Authentification et routes vérifiées
Route::middleware(['auth'])->group(function () {
    // Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware('verified')->name('dashboard'); // Ajout de la vérification d'email sur le dashboard seulement

    // Profil utilisateur
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Routes CRUD pour les posts
    Route::resource('posts', PostController::class);

    // Mes Posts
    Route::get('/my-posts', [PostController::class, 'myPosts'])->name('my.posts');
});
// Utilisation du middleware 'role'
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('categories', CategoryController::class);
});
// Pages statiques accessibles sans authentification
Route::view('/about', 'about')->name('about');
Route::view('/legal', 'legal')->name('legal');

// Inclure les routes d'authentification de Breeze
require __DIR__.'/auth.php';
