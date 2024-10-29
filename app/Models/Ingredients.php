<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredients extends Model
{
    use HasFactory;
    
    protected $table = 'ingredients';
    
    protected $fillable = [
        'name', 'type', 'object', 'description', 'created_at'
    ];

    public static function ingredientsByType()
    {
        return Ingredients::all()->groupBy('type');
    }

    public static function ingredients()
    {
        return Ingredients::all();
    }
}
