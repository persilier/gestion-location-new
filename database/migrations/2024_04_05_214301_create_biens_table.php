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
        Schema::create('biens', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('adreBien');
            $table->string('ville');
            $table->string('pays');
            $table->string('photoBien')->nullable();
            $table->integer('supeBien');
            $table->enum('typeBien', ['maison', 'immeuble'])->default('maison');
            $table->foreignId('proprietaire_id')->nullable()->constrained('proprietaires')->onDelete('cascade');
            $table->foreignId('agence_id')->nullable()->constrained('agences')->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biens');
    }
};
