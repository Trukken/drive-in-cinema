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
        Schema::create('airings', function (Blueprint $table) {
            $table->id();
            $table->dateTime('start', 0);
            $table->integer('number_of_parking_spots');
            $table->unsignedBigInteger('movie_id');
            $table->foreign('movie_id')->references(['id'])->on('movies')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('airing');
    }
};
