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
        Schema::create('materias', function (Blueprint $table) {
         $table->id();
    $table->foreignId('curso_id')->constrained('cursos')->onDelete('cascade');
    $table->string('nombre');
    $table->string('profesor');
    $table->integer('cantidad');
    $table->enum('grupo', [1, 2]);
    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materias');
    }
};
