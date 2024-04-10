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
        Schema::create('locataires', function (Blueprint $table) {
            $table->id();
            $table->string('cni');
            $table->string('employeur');
            $table->double('salaire');
            $table->enum('situMaritale', ['marié', 'celibataire', 'divorcé', 'veuf']);
            $table->integer('enfant')->default(0);
            $table->string('numUrgence');
            $table->string('nomGarant');
            $table->string('numGarant');
            $table->enum('typeLoc', ['morale', 'physique']);
            $table->date('dateNaissance');
            $table->string('lieuNaissance');
            $table->foreignId('user_id')->nullable()->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locataires');
    }
};
