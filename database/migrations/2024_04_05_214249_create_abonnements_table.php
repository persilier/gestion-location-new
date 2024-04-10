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
        Schema::create('abonnements', function (Blueprint $table) {
            $table->id();
            $table->date('dateDebut');
            $table->date('dateFin');
            $table->enum('situation', ['active', 'inactive'])->default('active');
            $table->text('conditions')->nullable();
            $table->integer('commission')->default(0);
            $table->foreignId('agence_id')->nullable()->constrained('agences')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('proprietaire_id')->nullable()->constrained('proprietaires')->onUpdate('cascade')->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abonnements');
    }
};
