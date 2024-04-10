<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('proprietaires', function (Blueprint $table) {
            $table->id();
            $table->string('numCompte');
            $table->enum('typeCompte', ['bancaire', 'mobile']);
            $table->enum('typeProprio', ['physique', 'morale']);
            $table->string('cniProprio');
            $table->string('typePiece');
            $table->string('ifuProprio')->nullable();
            $table->foreignId('agence_id')->nullable()->constrained('agences')->onDelete('cascade');
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proprietaires');
    }
};
