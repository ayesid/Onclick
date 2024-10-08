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
        Schema::create('canchas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('precio');
            $table->string('imagen')->nullable();
            $table->string('descripcion')->nullable();
            $table->unsignedBigInteger('centro_deportivo_id')->nullable();; // Asegúrate de usar el tipo correcto
        
            // Definición de la clave foránea
            $table->foreign('centro_deportivo_id')
                ->references('id')
                ->on('centro_deportivos')
                ->onDelete('set null')
                ->onUpdate('set null');
        
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('canchas');
    }
};
