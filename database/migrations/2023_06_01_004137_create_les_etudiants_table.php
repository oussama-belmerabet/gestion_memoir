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
        Schema::create('les_etudiants', function (Blueprint $table) {
            $table->id('num_et');
            $table->string('nom');
            $table->string('prenom');
            $table->string('spécialité');
            $table->unsignedBigInteger('sujet_id')->nullable();
            $table->unsignedBigInteger('num_binome')->nullable();
            $table->unsignedBigInteger('id_user');
            $table->timestamps();

            $table->foreign('sujet_id')->references('num_sujet')->on('sujets');
            $table->foreign('num_binome')->references('num_et')->on('les_etudiants');
            $table->foreign('id_user')->references('id')->on('users');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiants');
    }
};
