<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\Ingredients;

class RecipeController extends Controller
{
    public function store()
    {
        $data = request()->validate([
            'title' => 'required',
            'fermentables' => 'required',
            'secondary_ingredient' => 'required',
            'yeast' => 'required'
        ]);

        dd($data);

        $recipe = Recipe::create([
            'title' => $data['title'],
            'fermentables' => $data['fermentables'],
            'secondary_ingredient' => $data['secondary_ingredient'],
            'yeast' => $data['yeast']
        ]);

        dd($recipe);
        // return $recipe;
    }

    public function show(Request $request)
    {
        $ingredients = Ingredients::ingredientsByType();

        return view('create_recipe', ['ingredients' => $ingredients]);
    }
}
