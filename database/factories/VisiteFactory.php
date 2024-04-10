<?php

namespace Database\Factories;

use App\Models\Agent;
use App\Models\Bien;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Visite>
 */
class VisiteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'dateHeure' => $this->faker->dateTimeBetween(
                'last 1 years',
                'next Friday 2 years'
            ),
            'commentaire' => $this->faker->sentence(2),
            'bien_id' => Bien::pluck('id')->random(),
            'agence_id' => 1,
            'agent_id' => Agent::pluck('id')->random(),
        ];
    }
}
