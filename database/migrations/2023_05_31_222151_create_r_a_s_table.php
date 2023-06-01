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
        Schema::create('r_a_s', function (Blueprint $table) {
            $table->unsignedBigInteger('id_RA');
            $table->unsignedBigInteger('num_es');

            $table->foreign('id_RA')->references('id')->on('users');
            $table->foreign('num_es')->references('num_es')->on('enseignants');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_a_s');
    }
};
