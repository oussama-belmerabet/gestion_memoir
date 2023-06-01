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
        Schema::create('classements', function (Blueprint $table) {
            $table->id('num_clsmn');
            $table->unsignedBigInteger('num_et');
            $table->unsignedBigInteger('num_sujet');

            $table->foreign('num_et')->references('num_et')->on('les_etudiants');
            $table->foreign('num_sujet')->references('num_sujet')->on('sujets');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classements');
    }
};
