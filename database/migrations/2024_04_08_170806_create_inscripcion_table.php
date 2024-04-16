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
        Schema::create('inscripcion', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idAlumno')->nullable();
            $table->unsignedBigInteger('idMateria')->nullable();
            $table->foreign('idAlumno')->references('id')->on('alumnos')->onUpdate('cascade')->nullOnDelete();
            $table->foreign('idMateria')->references('id')->on('materia')->onUpdate('cascade')->nullOnDelete();
            $table->datetime('fecha_inscripcion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscripcion');
    }
};
