<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredient_recipe', function (Blueprint $table) {
// Ici on supprime le timestamp et l'id et notre pivot récupère les deux ids de nos autres tables
// On défini la récupération sur ingredient
            $table->unsignedBigInteger('ingredient_id');
            $table->foreign('ingredient_id')->references('id')->on('ingredients');
// On défini la récupération sur ingredient
            $table->unsignedBigInteger('recipe_id');
            $table->foreign('recipe_id')->references('id')->on('recipes');
// On doit bien faire attention que nos tables soient créer dans un ordre logique, 
// ici on récupère des données dans la table 'ingredients' et 'recipes' qui doivent forcément être déjà créé

// Ici on rajoute la quantitée et l'unité de mesure dans deux lignes différentes a notre recette
$table->integer('amount');
$table->string('unit');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingredient_recipe');
    }
};
