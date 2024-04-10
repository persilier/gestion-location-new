<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Locataire>
 */
class LocataireFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $situMaritale = $this->faker->randomElement(['celibataire', 'marié', 'divorcé', 'veuf']);
        $typeLoc = $this->faker->randomElement(['morale', 'physique']);
        return [
            'cni' => $this->faker->numberBetween(10000000, 99999999),
            'employeur' => $this->faker->company(),
            'salaire' => $this->faker->numberBetween(50000, 1000000),
            'situMaritale' => $situMaritale,
            'enfant' => $this->faker->numberBetween(0, 10),
            'numUrgence' => $this->faker->phoneNumber(),
            'nomGarant' => $this->faker->lastName(),
            'numGarant' => $this->faker->phoneNumber(),
            'typeLoc' => $typeLoc,
            'dateNaissance' => $this->faker->dateTimeThisCentury->format('Y-m-d'),
            'lieuNaissance' => $this->faker->country(),
            'user_id' => User::role('locataire')->inRandomOrder()->first()->id,
        ];
    }
}
