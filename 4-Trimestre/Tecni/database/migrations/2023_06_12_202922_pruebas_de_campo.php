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
        Schema::create('pruebas_de_campo', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre_empleado');
            $table->date('fecha');
            $table->bigInteger('numero_cilindro');
            $table->bigInteger('numero_prueba');
            $table->string('cliente');
            $table->string('ubicacion');
            $table->string('sondeos')->nullable();
            $table->string('revenimiento')->nullable();
            $table->string('ultrasonico')->nullable();
            $table->string('esclerometria')->nullable();
            $table->string('analisis_petrograficos')->nullable(); 
            $table->string('elaboracion')->nullable();
            $table->string('reactividad')->nullable();
            $table->string('compresion')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pruebas_de_campo');
    }
};
