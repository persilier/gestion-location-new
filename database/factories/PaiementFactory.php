<?php

namespace Database\Factories;

use App\Models\Loyer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Paiement>
 */
class PaiementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'datePaie' => $this->faker->dateTimeThisCentury->format('Y-m-d'),
            'montantVerse' => $this->faker->numberBetween(2000, 10000),
            'restant' => $this->faker->numberBetween(0, 200),
            'echeancemois' => $this->faker->numberBetween(1, 12),
            'numeroFactures' => 'INV-' . $this->faker->randomNumber(7, true),
            'codeTransaction' => 'CODE-' . $this->faker->randomNumber(5, true),
            'statut' => $this->faker->randomElement(['en cours', 'paye', 'en attente']),
            'validation' => $this->faker->boolean(),
            'loyer_id' => Loyer::pluck('id')->random(),
        ];
    }
}
