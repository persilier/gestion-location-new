<?php

namespace Database\Factories;

use App\Models\Bien;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Depense>
 */
class DepenseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'descRepa' => $this->faker->sentence(2),
            'dateSignal' => $this->faker->dateTimeBetween(
                'last 1 years',
                'next Friday 2 years'
            ),
            'statRepar' => $this->faker->randomElement(['en attente', 'reglé', 'en cours']),
            'coutRepar' => $this->faker->randomFloat(2, 1000, 100000),
            'agence_id' => 1,
            'bien_id' => Bien::pluck('id')->random()
        ];
    }
}
