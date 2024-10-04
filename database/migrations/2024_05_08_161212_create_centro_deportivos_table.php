<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('centro_deportivos', function (Blueprint $table) {
            $table->id();   
            $table->string('nombre');
            $table->string('direccion')->unique(); // Campo para correo electrónico, único
            $table->string('telefono')->nullable(); // Campo para número de teléfono (puede ser nulo)
            $table->integer('numero_canchas');
            $table->string('imagen')->nullable();
            $table->text('descripcion')->nullable();
            $table->enum('parqueadero', ['si', 'no'])->nullable();
            $table->unsignedBigInteger('municipio_id')->nullable(); 

            $table->foreign('municipio_id') 
                ->references('id')
                ->on('municipios')
                ->onDelete('set null')
                ->onUpdate('set null');

            $table->unsignedBigInteger('horario_id')->nullable(); // Cambiado 'CeDe_id' por 'centro_deportivo_id'

                $table->foreign('horario_id') // Cambiado 'CeDe_id' por 'centro_deportivo_id'
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
        Schema::dropIfExists('centro_deportivos');
    }
};
