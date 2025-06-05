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
        Schema::create('docentes', function (Blueprint $table) {
            $table->id('docente_id');
            $table->string('usuario')->unique();
            $table->string('password');
            $table->char('first_name', 100);
            $table->char('last_name', 100);
            $table->string('carrera')->nullable();
            $table->string('cargo')->nullable();
            $table->char('phone', 20)->nullable();
            $table->char('email', 100)->unique();
            $table->string('email2')->nullable();
            $table->char('street', 200)->nullable();
            $table->char('city', 100)->nullable();
            $table->integer('estado')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('docentes');
    }
};
