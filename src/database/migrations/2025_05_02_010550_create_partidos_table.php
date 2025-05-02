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
        Schema::create('partidos', function (Blueprint $table) {
            $table->id('id_partido');
            $table->foreignId('id_equipo_local')->constrained('equipos', 'id_equipo')->onDelete('cascade');
            $table->foreignId('id_equipo_visitante')->constrained('equipos', 'id_equipo')->onDelete('cascade');
            $table->string('resultado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partidos');
    }
};
