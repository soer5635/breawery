<?php

use App\Http\Controllers\ProfileController;
use App\Models\Recipe;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\IngredientController;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    });
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('create_recipe', function() {
        return view('create_recipe');
    });
    Route::post('create_recipe', [RecipeController::class, 'store'])->name('create_recipe.store');
    Route::get('create_recipe', [IngredientController::class, 'show'])->name('recipes.create');

    Route::get('insert_ingredient', function() {
        return view('insert_ingredient');
    });
    Route::post('insert_ingredient', [IngredientController::class, 'store'])->name('insert_ingredient.store');
});

require __DIR__.'/auth.php';
