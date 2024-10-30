<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingredients;

class IngredientController extends Controller
{
    public function create()
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

    public function insert()
    {
        $ingredient = new Ingredients();
        return view('ingredients.insert' , ['ingredient' => $ingredient]);
    }

    public function edit(Ingredients $ingredient)
    {
        return view('ingredients.edit', ['ingredient' => $ingredient]);
    }

    public function update(Ingredients $ingredient)
    {
        $ingredient = Ingredients::findOrFail($ingredient->id);
        
        $object = json_decode($ingredient->object, true);

        if ($ingredient->type == 'secondary' && isset($object["secondary_type"]) && $object["secondary_type"] == "hop") {
            $data = request()->validate([
                'name' => 'required',
                'alpha_acid' => 'required',
            ]);
        }
        else {
            $data = request()->validate([
                'name' => 'required',
            ]);
        }

        $data = request()->except(['name', 'type', '_token', 'description', '_method']);
        $json_object = json_encode($data);

        $ingredient->update([
            'name' => request('name'),
            'type' => request('type'),
            'object' => $json_object,
            'description' => request('description'),
            'created_at' => now()
        ]);

        return redirect()->route('ingredients.show')->with('success', 'Ingredient updated successfully!');
    }

    public function destroy(Ingredients $ingredient)
    {
        // dd($ingredient);
        $ingredient->delete();
        return redirect()->route('ingredients.show');
    }


}
