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
        Schema::create('paiements', function (Blueprint $table) {
            $table->id();
            $table->date('datePaie');
            $table->double('montantVerse');
            $table->double('restant');
            $table->unsignedInteger('echeancemois');
            $table->string('numeroFactures')->unique();
            $table->string('codeTransaction')->unique();
            $table->enum('statut', ['en cours', 'paye', 'en attente'])->default('en attente');
            $table->boolean('validation')->default(false);
            $table->foreignId('loyer_id')->constrained('loyers')->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paiements');
    }
};
