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
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('titreLoca');
            $table->integer('chambre');
            $table->integer('salon');
            $table->integer('douche');
            $table->integer('wc');
            $table->text('description');
            $table->string('quartier');
            $table->enum('etatLocal', ['nouveau', 'moyen', 'bon', 'mauvais']);
            $table->float('chargeLocal')->default(0);
            $table->float('prix')->default(0);
            $table->enum('statutLocal', ['libre', 'occupé', 'maintenance'])->default('libre');
            $table->integer('cuisine');
            $table->string('photoLoca')->nullable();
            $table->foreignId('bien_id')->constrained('biens')->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locations');
    }
};
