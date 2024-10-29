<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingredients;

class IngredientController extends Controller
{
    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
        ]);

        $data = request()->except(['name', 'type', '_token', 'description']);
        $json_object = json_encode($data);

        Ingredients::create([
            'name' => request('name'),
            'type' => request('type'),
            'object' => $json_object,
            'description' => request('description'),
            'created_at' => now()
        ]);
        return redirect()->back()->with('success', 'Ingredient added successfully!');
    }

    public function show()
    {
        $ingredients = Ingredients::ingredients();
        return view('ingredients', ['ingredients' => $ingredients]);
    }

    public function insertIngredient()
    {
        return view('ingredients/insert_ingredient');
    }

    public function edit(Ingredients $ingredient)
    {
        return view('ingredients.edit', ['ingredient' => $ingredient]);
    }


}
