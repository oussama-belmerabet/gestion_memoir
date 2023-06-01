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
        Schema::create('encadrements', function (Blueprint $table) {
            $table->id('id_enc');
            $table->integer('année');
            $table->string('état');
            $table->unsignedBigInteger('num_es');
            $table->timestamps();

            $table->foreign('num_es')->references('num_es')->on('enseignants');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('encadrements');
    }
};
