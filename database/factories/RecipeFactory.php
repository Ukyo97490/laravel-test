<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipe>
 */
class RecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // Ici on va faire en sorte que des recettes soient généré automatiquement,
            // on rempli donc le title avec un faux mot de 4 a 12 caractères 
            // et true pour qu'il renvoi une chaine de caractères et non un tableau
            'title'=>$this->faker->words(rand(4,12),true)
        ];
    }
}
