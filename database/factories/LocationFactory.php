<?php

namespace Database\Factories;

use App\Models\Bien;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Location>
 */
class LocationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->randomElement([
            '2 Chambre Salon Douche WC',
            '1 Chambre Salon WC',
            'Villa R + 1',
            '3 Chambre Salon WC',
            'Studio 1 WC',
            '3 Chambres luxueux avec staff',
            'Appartement luxueux 2 Chambres',
            '4 Chambre Salon WC',
            'Villa R+2 piscine',
            '4 Chambres Salon avec garage',
            '1 Chambre Salon WC avec staff',
            '3 Chambre Salon avec Climatisation',
            '2 Chambres Salon avec Climatisation',
            'Studio WC climatisation',
            '2 Chambres Salon avec garage',
            '3 Chambres entrée personnelle',
            '4 Chambres Salon avec Climatisation',
            'Villa R+1 avec garage et piscine',
            '2 Chambres Salon avec Climatisation',
            'Villa R+1 avec piscine',
        ]);
        return [
            'titreLoca' => $name,
            'chambre' => $this->faker->numberBetween(1, 5),
            'salon' => $this->faker->numberBetween(1, 2),
            'douche' => $this->faker->numberBetween(1, 2),
            'wc' => $this->faker->numberBetween(1, 2),
            'description' => $this->faker->paragraph(5),
            'quartier' => $this->faker->sentence(10),
            'etatLocal' => $this->faker->randomElement(['nouveau', 'moyen', 'bon', 'mauvais']),
            'chargeLocal' => $this->faker->numberBetween(0, 5000),
            'prix' => $this->faker->numberBetween(1000, 5000),
            'statutLocal' => $this->faker->randomElement(['occupé', 'libre', 'maintenance']),
            'cuisine' => $this->faker->numberBetween(1, 2),
            'photoLoca' => $this->faker->imageUrl(640, 480),
            'bien_id' => Bien::pluck('id')->random(),
        ];
    }
}
