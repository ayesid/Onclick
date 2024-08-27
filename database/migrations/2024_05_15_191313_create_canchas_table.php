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
            $table->string('telefono')->nullable(); // Campo para número de teléfono (puede ser nulo)
            $table->integer('precio');
            $table->string('imagen')->nullable(); // Campo para la ubicación de la imagen (puede ser nulo)
            $table->string('descripcion');
            
            $table->unsignedBigInteger('centro_deportivo_id'); // Cambiado 'CeDe_id' por 'centro_deportivo_id'

            $table->foreign('centro_deportivo_id') // Cambiado 'CeDe_id' por 'centro_deportivo_id'
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
