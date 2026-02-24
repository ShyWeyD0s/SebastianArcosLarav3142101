<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * creamos la tabla result_suma con los campos id, num1, num2, result y timestamps para almacenar los resultados de las sumas realizadas a través del formulario HTML.
     */
    public function up(): void
    {
        Schema::create('result_suma', function (Blueprint $table) {
            $table->id();
            $table->integer('num1')->nullable();
            $table->integer('num2')->nullable();
            $table->integer('result')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('result_suma');
    }
};
