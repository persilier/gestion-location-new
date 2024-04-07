<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username' => 'admin',
            'nom' => 'admin',
            'prenom' => 'administrateur',
            'tel' => '0000000000',
            'email' => 'admin@mail.com',
            'adresse' => 'rue de la paix',
            'statut' => 'actif',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ])->assignRole('admin');
        User::create([
            'username' => 'locataire',
            'nom' => 'locataire',
            'prenom' => 'locataire',
            'tel' => '222222222',
            'adresse' => 'rue de la paix',
            'statut' => 'actif',
            'email' => 'locataire@mail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ])->assignRole('locataire');
        User::create([
            'username' => 'proprietaire',
            'nom' => 'proprietaire',
            'prenom' => 'proprietaire',
            'tel' => '333333333',
            'statut' => 'inactif',
            'email' => 'proprietaire@mail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ])->assignRole('proprietaire');
        User::create([
            'username' => 'manager',
            'nom' => 'manager',
            'prenom' => 'manager',
            'tel' => '444444444',
            'adresse' => 'rue de la paix',
            'email' => 'manager@mail.com',
            'statut' => 'actif',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ])->assignRole('manager');
        User::create([
            'username' => 'employe',
            'nom' => 'employe',
            'prenom' => 'employe',
            'tel' => '55555555',
            'statut' => 'inactif',
            'adresse' => 'rue de la paix',
            'email' => 'employe@mail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ])->assignRole('employe');
    }
}
