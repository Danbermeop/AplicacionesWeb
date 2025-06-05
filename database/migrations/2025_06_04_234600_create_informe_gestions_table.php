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
        Schema::create('informe_gestion', function (Blueprint $table) {
             $table->id('informe_gestion_id');
            $table->foreignId('docente_id')->constrained('docentes', 'docente_id');
            $table->string('mes');
            $table->date('informe_date');
            $table->text('conclusions');
            $table->text('recommendations');
            $table->integer('estado')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informe_gestion');
    }
};
