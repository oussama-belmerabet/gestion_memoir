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
        Schema::create('sujets', function (Blueprint $table) {
            $table->id('num_sujet');
            $table->string('intitulé');
            $table->text('description');
            $table->unsignedBigInteger('num_es');
            $table->integer('num_com_accepter')->default(0);
            $table->integer('num_com_refuser')->default(0);
            $table->timestamps();

            $table->foreign('num_es')->references('num_es')->on('enseignants');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sujets');
    }
};
