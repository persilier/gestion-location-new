<?php

namespace Database\Factories;

use App\Models\Locataire;
use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Loyer>
 */
class LoyerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'dateLoyer' => $this->faker->dateTimeThisCentury->format('Y-m-d'),
            'mensuel' => $this->faker->month(),
            'year' => $this->faker->year(),
            'caution' => $this->faker->numberBetween(0, 10000),
            'locataire_id' => Locataire::pluck('id')->random(),
            'location_id' => Location::pluck('id')->random(),
            'agence_id' => 1,
        ];
    }
}
