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
        Schema::create('r_s_m_s', function (Blueprint $table) {
            $table->unsignedBigInteger('id_RSM')->unique();
            $table->unsignedBigInteger('id_RA')->unique();

            $table->foreign('id_RSM')->references('id')->on('users');
            $table->foreign('id_RA')->references('num_es')->on('enseignants');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_s_m_s');
    }
};
