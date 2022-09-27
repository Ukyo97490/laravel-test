<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Recipe extends Model
{
    use HasFactory;

    // Notre recipe a un seul utilisateur donc BelongsTo
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

// Maintenant on dit que l'utilisateur a aussi une relation avec des ingrédients (plusieurs donc belongstoMany)
    public function ingredients():BelongsToMany
    {
        // BelongsToMany va avec le model Ingredient ici 
        return $this->belongsToMany(Ingredient::class)
        // On récupère aussi le pivot
        ->withPivot(['amount','unit']);
    }
}
