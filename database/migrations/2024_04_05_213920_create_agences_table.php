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
        Schema::create('agences', function (Blueprint $table) {
            $table->id();
            $table->string('raisonSoc');
            $table->string('telAgence');
            $table->string('email');
            $table->string('ville');
            $table->string('pays');
            $table->string('ifu');
            $table->string('compte_bancaire')->nullable();
            $table->string('logoAgence')->nullable();
            $table->string('cnss')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agences');
    }
};
