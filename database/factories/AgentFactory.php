<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Agent>
 */
class AgentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $dateEmbauche = $this->faker->dateTimeBetween(
            'last 2 years',
            'next Friday 3 years'
        );
        $statut = $this->faker->randomElement(['celibataire', 'marié', 'divorcé', 'veuf', 'fiancé']);
        return [
            'fonction' => $this->faker->jobTitle(),
            'agence_id' => 1,
            'user_id' => User::role(['employe', 'manager'])->pluck('id')->random(),
            'dateAniv' => $this->faker->dateTimeThisCentury->format('Y-m-d'),
            'dateEmbauche' => $dateEmbauche,
            'statut' => $statut,
            'service' => $this->faker->word(),
        ];
    }
}
