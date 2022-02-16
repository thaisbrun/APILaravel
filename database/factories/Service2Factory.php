<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class Service2Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'LIBELLE' => $this->faker->realText($maxNbChars = 50),
            'DESCRIPTION' => $this->faker->realText($maxNbChars = 100),
            'RECHERCHE' => $this->faker->boolean,
            'PUBLIQUE' => $this->faker->boolean,
            'IDINSCRIT' => $this->faker->numberBetween($min = 1, $max = 200),
        ];
    }
}
