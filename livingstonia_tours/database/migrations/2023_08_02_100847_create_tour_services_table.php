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
        Schema::create('tour_services', function (Blueprint $table) {
            $table->bigIncrements('tID');
            $table->string('tName')->unique();
            $table->double('tBill');
            $table->timestamps();
            $table->string('tImage')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tour_services');
    }
};
