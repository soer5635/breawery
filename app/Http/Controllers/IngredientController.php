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
            'description' => request('comment'),
            'created_at' => now()
        ]);
        return redirect()->back()->with('success', 'Ingredient added successfully!');
    }

    public function show(Request $request)
    {
        $ingredients = Ingredients::all()->groupBy('type');

        return view('create_recipe', ['ingredients' => $ingredients]);
    }
}
