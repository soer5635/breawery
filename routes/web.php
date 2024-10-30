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

    Route::get('create_recipe', [RecipeController::class, 'show'])->name('recipes.create');
    Route::post('create_recipe', [RecipeController::class, 'store'])->name('create_recipe.store');


    Route::get('ingredients', [IngredientController::class, 'show'])->name('ingredients.show');
    Route::get('ingredients/insert', [IngredientController::class, 'insert'])->name('ingredients.insert');
    Route::post('ingredients/insert', [IngredientController::class, 'create'])->name('ingredients.create');
    Route::get('ingredients/{ingredient}/edit', [IngredientController::class, 'edit'])->name('edit');
    Route::patch('ingredients/{ingredient}/edit', [IngredientController::class, 'update'])->name('update');
    Route::delete('ingredients/{ingredient}', [IngredientController::class, 'destroy']);
});

require __DIR__.'/auth.php';
