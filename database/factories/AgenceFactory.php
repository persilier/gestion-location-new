<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Agence>
 */
class AgenceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'raisonSoc' => $this->faker->company(),
            'telAgence' => $this->faker->phoneNumber(),
            'email' => $this->faker->safeEmail(),
            'ville' => $this->faker->city(),
            'pays' => $this->faker->country(),
            'compte_bancaire' => $this->faker->iban(),
            'ifu' => $this->faker->numberBetween(10000000, 99999999),
            'logoAgence' => $this->faker->imageUrl(),
            'cnss' => $this->faker->numberBetween(90000000, 99999999),
        ];
    }
}
