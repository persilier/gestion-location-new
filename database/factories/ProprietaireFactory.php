<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Proprietaire>
 */
class ProprietaireFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $typeCompte = $this->faker->randomElement(['bancaire', 'mobile']);
        $typeProprio = $this->faker->randomElement(['physique', 'morale']);
        return [
            'numCompte' => $this->faker->numberBetween(10000000, 99999999),
            'typeCompte' => $typeCompte,
            'typeProprio' => $typeProprio,
            'agence_id' => 1,
            'typePiece' => $this->faker->randomElement(['CNI', 'PASSPORT']),
            'cniProprio' => $this->faker->numberBetween(10000000, 99999999),
            'ifuProprio' => $this->faker->numberBetween(20002000, 99999999),
            'user_id' => User::role('proprietaire')->pluck('id')->random(),
        ];
    }
}
