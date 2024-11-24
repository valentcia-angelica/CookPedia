<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [RecipeController::class, 'getAllRecipes'])->name('homePage');
Route::get('recipeDetail/{id}', [RecipeController::class, 'getRecipeDetail'])->name('recipeDetailPage');

Route::get('/author', [AuthorController::class, 'getAllAuthors'])->name('authorPage');

Route::get('/recipe', [RecipeController::class, 'getPopularRecipes'])->name('recipePage');

Route::get('/category/{id}', [CategoryController::class, 'getRecipeByCategoryId'])->name('categoryPage');

Route::get('/author/{id}', [AuthorController::class, 'getAuthorDetail'])->name('authorDetailPage');

Route::get('/aboutUs', function () {
    return view('main.aboutUs');
})->name('aboutUsPage');

Route::get('/search', [RecipeController::class, 'searchRecipeByName'])->name('searchRecipePage');