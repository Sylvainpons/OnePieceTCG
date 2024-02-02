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
        Schema::create('cartes', function (Blueprint $table) {
            $table->id();
            $table->string('numero', 20)->unique();
            $table->string('nom');
            $table->unsignedBigInteger('rarities_id')->nullable();
            $table->foreign('rarities_id')->references('id')->on('rarities')->onDelete('set null');
            $table->string('illustration')->nullable();
            $table->longText('description')->nullable();
            $table->boolean('possede')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cartes');
    }
};
