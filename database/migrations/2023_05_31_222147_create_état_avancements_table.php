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
        Schema::create('état_avancements', function (Blueprint $table) {
            $table->id('code_eA');
            $table->date('date');
            $table->text('description');
            $table->integer('pourcentage');
            $table->unsignedBigInteger('num_sujet');
            $table->timestamps();

            $table->foreign('num_sujet')->references('num_sujet')->on('sujets');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('état_avancements');
    }
};
