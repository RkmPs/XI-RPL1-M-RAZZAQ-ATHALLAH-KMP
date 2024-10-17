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
        Schema::create('tabel_rooms', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->enum('status', ['Available', 'Occupied', 'Reserved', 'Out of order']);
            $table->enum('roomType', ['Single', 'Double', 'Twin', 'Suite', 'Deluxe']);
            $table->bigInteger('pricePerNights');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_rooms');
    }
};
