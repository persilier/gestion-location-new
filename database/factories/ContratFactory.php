<?php

namespace Database\Factories;

use App\Models\Locataire;
use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contrat>
 */
class ContratFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'dateDebut' => $this->faker->dateTimeBetween(
                'last 2 years',
                'next Friday 3 years'
            ),
            'dureeCont' => $this->faker->numberBetween(1, 4),
            'conditions' => $this->faker->sentence(5),
            'locataire_id' => Locataire::pluck('id')->random(),
            'location_id' => Location::pluck('id')->random(),
        ];
    }
}
