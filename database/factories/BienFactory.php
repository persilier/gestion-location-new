<?php

namespace Database\Factories;

use App\Models\Locataire;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bien>
 */
class BienFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->randomElement([
            'Immeuble R+1 moderne au cœur du quartier des Cocotiers',
            'Immeuble R+1 avec appartements spacieux ',
            'Immeuble R+1 récemment rénové ',
            'Maison R+1 avec vue sur la lagune ',
            'Immeuble R+1 avec jardin privatif ',
            'Immeuble R+1 avec terrasses ensoleillées ',
            'Immeuble R+1 avec appartements meublés ',
            'Immeuble R+1 avec espaces commerciaux au rez-de-chaussée ',
            'Immeuble R+1 avec accès facile aux transports en commun ',
            'Immeuble R+1 avec vue panoramique sur la ville ',
            'Immeuble R+2 avec appartements de luxe ',
            'Immeuble R+2 avec balcons donnant sur la mer',
            'Immeuble R+2 avec vue imprenable sur le pont',
            'Immeuble R+2 avec ascenseur ',
            'Immeuble R+2 avec accès sécurisé ',
            'Immeuble R+2 avec salles de réunion équipées ',
            'Immeuble R+2 avec terrains de sport',
            'Immeuble R+2 avec espaces verts ',
            'Immeuble R+2 avec restaurants et cafés ',
            'Immeuble R+2 avec piscine commune ',
            'Immeuble R+3 avec bureaux modernes ',
            'Immeuble R+3 avec vue sur le marché ',
            'Immeuble R+3 avec salle de fitness ',
            'Immeuble R+3 avec appartements familiaux ',
            'Immeuble R+3 avec espaces de détente ',
            'Immeuble R+3 avec système de sécurité avancé ',
            'Immeuble R+3 avec parking souterrain ',
            'Immeuble R+3 avec studios étudiants ',
            'Immeuble R+3 avec centre commercial intégré ',
            'Immeuble R+3 avec vue sur la lagune ',
        ]);
        return [
            'titre' => $name,
            'adreBien' => $this->faker->address(),
            'ville' => $this->faker->city(),
            'pays' => $this->faker->country(),
            'photoBien' => $this->faker->imageUrl(),
            'supeBien' => $this->faker->randomFloat(2, 10, 1000),
            'typeBien' => $this->faker->randomElement(['immeuble', 'maison']),
            'proprietaire_id' => Locataire::inRandomOrder()->first()->id,
            'agence_id' => 1,
        ];
    }
}
