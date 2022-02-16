<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class JardinageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'IDSERVICE' => $this->faker->numberBetween($min = 1, $max = 200),
            'MATERIEL' => $this->faker->realText($maxNbChars = 100),
            'ADRESSE' => $this->faker->address,
            'EFFECTIF' => $this->faker->numberBetween($min = 1, $max = 10),
            'LIBELLE' => $this->faker->realText($maxNbChars = 100),
            'DESCRIPTION' => $this->faker->realText($maxNbChars = 200),
            'RECHERCHE' => $this->faker->boolean,
            'PUBLIQUE' => $this->faker->boolean,
            'IDINSCRIT' => $this->faker->numberBetween($min = 1, $max = 200),
        ];
    }
}