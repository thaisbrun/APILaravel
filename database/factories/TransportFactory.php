<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TransportFactory extends Factory
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
            'ADRESSEDEPART' => $this->faker->address,
            'ADRESSEARRIVEE' => $this->faker->address,
            'MODELEVOITURE' => $this->faker->realText($maxNbChars = 20),
            'NOMBREPLACE' => $this->faker->numberBetween($min = 0, $max = 5),
            'LIBELLE' => $this->faker->realText($maxNbChars = 100),
            'DESCRIPTION' => $this->faker->realText($maxNbChars = 200),
            'RECHERCHE' => $this->faker->boolean,
            'PUBLIQUE' => $this->faker->boolean,
            'IDINSCRIT' => $this->faker->numberBetween($min = 1, $max = 200),
            
        ];
    }
}
