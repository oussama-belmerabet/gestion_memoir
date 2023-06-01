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
        Schema::create('reclamation', function (Blueprint $table) {
            $table->id('code_rec');
            $table->text('message');
            $table->unsignedBigInteger('num_et');
            $table->timestamps();

            $table->foreign('num_et')->references('num_et')->on('les_etudiants');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('réclamations');
    }
};
