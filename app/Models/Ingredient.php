<?php

namespace App\Models;

use App\Models\Recipe;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Ingredient extends Model
{
    use HasFactory;

    // Un ingrédient a plusieurs recettes
    public function recipes():BelongsToMany
    {
        // BelongsToMany va avec le model Recipe ici 
        return $this->belongsToMany(Recipe::class)
        // On récupère aussi le pivot
        ->withPivot(['amount','unit']);
    }

}
