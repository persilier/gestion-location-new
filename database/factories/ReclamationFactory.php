<?php

namespace Database\Factories;

use App\Models\Locataire;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reclamation>
 */
class ReclamationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'contenu' => $this->faker->sentence(1),
            'etat' => $this->faker->randomElement(['traite', 'en cours']),
            'locataire_id' => Locataire::pluck('id')->random(),
            'dateRecl' => $this->faker->dateTimeBetween(
                'last 2 months',
                'next 2 months'
            )
        ];
    }
}
