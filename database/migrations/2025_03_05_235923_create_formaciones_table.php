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
        Schema::create('formaciones', function (Blueprint $table) {
            $table->id();
            $table->string('centro_formacion');
            $table->string('titulo_curso');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->integer('horas_formativas');
            $table->integer('horas_pnl')->nullable();
            $table->string('familia_profesional')->nullable();
            $table->string('codigo_curso')->nullable();
            $table->string('financiado_por')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formaciones');
    }
};
