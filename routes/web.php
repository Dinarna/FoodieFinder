<?php

use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIController;
use App\Http\Controllers\RecipeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



// Nutrients Page
Route::get('/Nutrients', function () {
    return view('Nutrients');
})->middleware(['auth', 'verified']);

// Profile Page
Route::get('/Profile', function () {
    return view('Profile');
});

// Template Login Page
Route::get('/Login', function () {
    return view('Register');
});

// Template DetailRecipe Page
Route::get('/DetailRecipe', function () {
    return view('DetailRecipe');
})->middleware(['auth', 'verified']);

// Template Recipe Page
Route::get('/Recipe', function () {
    return view('Recipe');
})->middleware(['auth', 'verified']);

// Template WelcomePage Page
Route::get('/', function () {
    return view('WelcomePage');
});

// Template Ingredient Page
Route::get('/Ingredient', function () {
    return view('Ingredient');
})->middleware(['auth', 'verified']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/Home', [APIController::class, 'index'])->middleware(['auth', 'verified']);
Route::post('/Home', [RecipeController::class, 'handleSearch'])->middleware(['auth', 'verified'])->name('LandingPage');
Route::post('/getbynutrients', [RecipeController::class, 'recipeByNutrients'])->middleware(['auth', 'verified'])->name('nutrients');
Route::get('recipe/{id}', [RecipeController::class, 'show'])->middleware(['auth', 'verified'])->name('recipe.show');


Route::get('auth/google', [GoogleAuthController::class, 'redirect'])->name('google-auth');
Route::get('auth/google/callback', [GoogleAuthController::class, 'callbackGoogle']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
