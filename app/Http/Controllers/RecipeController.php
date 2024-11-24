<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    //
    public function getAllRecipes(){
        $recipes = Recipe::with('author', 'category')->get();

        return view("main.home", ['recipe' => $recipes]);
    }

    public function getRecipeDetail($id){
        $recipe = Recipe::with('author', 'category')->find($id);

        return view("main.recipeDetail", ['recipe' => $recipe]);
    }

    // Pagination
    public function getPopularRecipes(){
        $popular = Recipe::with('author', 'category')->paginate(2);
        return view('main.recipe', ['recipe' => $popular]);
    }

    //Search
    public function searchRecipeByName(Request $request){
        $searchedName = $request->input('query');
        $recipes = Recipe::where('recipe_name', 'like', '%'. $searchedName. "%")->get();

        return view('main.search', ['recipes' => $recipes, 'searchedName' => $searchedName]);
    }
}
