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
        Schema::create('nuevo_informe', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre_empleado');
            $table->date('fecha');
            $table->bigInteger('numero_cilindro');
            $table->bigInteger('numero_prueba');
            $table->string('cliente');
            $table->string('granulometria');
            $table->string('aire');
            $table->string('flexion');
            $table->string('compresion');
            $table->string('estudio');
            $table->string('eslasticidad');
            $table->string('contraccion');
            $table->string('pruebas_permeabilidad');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nuevo_informe');
    }
};
