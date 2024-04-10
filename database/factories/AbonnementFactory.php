<?php

namespace Database\Factories;

use App\Models\Proprietaire;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Abonnement>
 */
class AbonnementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $startdate = $this->faker->dateTimeBetween(
            'last 2 years',
            'next Friday 3 years'
        );
        $endDate = $this->faker->dateTimeBetween(
            'last 1 years',
            'next 5 years'
        );

        return [
            'dateDebut' => $startdate,
            'dateFin' => $endDate,
            'situation' => $this->faker->randomElement(['active', 'inactive']),
            'commission' => $this->faker->numberBetween(0, 20),
            'agence_id' => 1,
            'conditions' => $this->faker->sentence(2),
            'proprietaire_id' => Proprietaire::pluck('id')->random(),
        ];
    }
}
