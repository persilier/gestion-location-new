<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(2)->manager()->create();
        User::factory(30)->locataire()->create();
        User::factory(10)->proprietaire()->create();
        User::factory(10)->employe()->create();
    }
}
