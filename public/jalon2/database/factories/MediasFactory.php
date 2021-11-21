<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MediasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'TITRE' => $this->faker->unique()->word, // A single unique word
            'DESCRIPTION' => $this->faker->unique()->sentences($nb = 3, $asText = true),
            'DATE_DE_SORTIE' => $this->faker->dateTimeThisMonth(),
            'DUREE'=> 20,
            'ACTEURS'=>  $this->faker->unique()->word,
            'REALISATEUR' =>  $this->faker->unique()->word,
            'PAYS' =>  $this->faker->unique()->word,
            'AFFICHE' => $this->faker->unique()->word,
            'NOTE'=> 20,
            'NOMBRE_EPISODE' =>10,


        ];
    }
}