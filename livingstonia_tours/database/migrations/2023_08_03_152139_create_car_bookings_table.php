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
        Schema::create('car_bookings', function (Blueprint $table) {
            $table->bigIncrements('bID'); // Use bigIncrements for an auto-incrementing primary key of type int
            $table->string('name');
            $table->string('Email');
            $table->string('phone');
            $table->date('dateOfDeparture');
            $table->string('currentAddress');
            $table->string('destinationAddress');
            $table->string('daysOfStay');
            $table->string('estimatedParticipates');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_bookings');
    }
};
