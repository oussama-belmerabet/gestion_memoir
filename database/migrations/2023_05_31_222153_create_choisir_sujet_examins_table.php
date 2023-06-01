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
        Schema::create('choisir_sujet_examins', function (Blueprint $table) {
            $table->unsignedBigInteger('num_es');
            $table->unsignedBigInteger('num_sujet');

            $table->foreign('num_es')->references('num_es')->on('enseignants');
            $table->foreign('num_sujet')->references('num_sujet')->on('sujets');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('choisir_sujet_examins');
    }
};
