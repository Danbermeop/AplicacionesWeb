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
        Schema::create('actividad', function (Blueprint $table) {
            $table->id('actividad_id');
            $table->foreignId('informe_gestion_id')->constrained('informe_gestion', 'informe_gestion_id');
            $table->date('fecha_actividad');
            $table->string('indicador_gestion');
            $table->string('parametro_gestion');
            $table->text('acciones');
            $table->text('resultado');
            $table->integer('estado')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actividad');
    }
};
