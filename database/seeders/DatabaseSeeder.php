<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Recipe;
use Illuminate\Database\Seeder;
use Database\Factories\RecipeFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // On va gérer des seeders (pour un remplissage auto) on va faire 10 'users' 
        // et pour chaque user on va faire 3 recettes
        \App\Models\User::factory(10)->has(
            // Comme c'est un many to many on rattache le tableau a un autre
            Recipe::factory(3)->hasAttached(
                // Chaque recette aura 5 ingrédients
                Ingredient::factory(5),[
                    // On rajoute ici 10 en quantité et en unité des "cl"
                    'amount'=>10,
                    'unit'=>'cl'

                ]
            )
        )->create();
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
