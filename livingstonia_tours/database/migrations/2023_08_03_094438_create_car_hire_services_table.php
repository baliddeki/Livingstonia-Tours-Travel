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
        Schema::create('car_hire_services', function (Blueprint $table) {
            $table->bigIncrements('cID');
            $table->string('cName'); // Car name
            $table->string('cUnit'); // Car unit
            $table->string('cDescription'); // Car description
            $table->string('cImage'); // Car image (you can use a string column to store the image path)
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_hire_services');
    }
};
