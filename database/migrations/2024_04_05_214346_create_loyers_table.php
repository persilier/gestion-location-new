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
        Schema::create('loyers', function (Blueprint $table) {
            $table->id();
            $table->date('dateLoyer');
            $table->unsignedInteger('mensuel');
            $table->unsignedInteger('year');
            $table->double('caution')->nullable();
            $table->foreignId('locataire_id')->nullable()->constrained('locataires')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('location_id')->nullable()->constrained('locations')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('agence_id')->constrained('agences')->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loyers');
    }
};
