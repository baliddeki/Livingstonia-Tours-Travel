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
            $table->bigIncrements('cID'); // Use bigIncrements for an auto-incrementing primary key of type int
            $table->string('cName');
            $table->string('cUnit');
            $table->string('cDescription');
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
