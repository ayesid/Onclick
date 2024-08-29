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
        Schema::create('horario_reservas', function (Blueprint $table) {
            $table->id();
            $table->dateTime('horarioinicio')->nullable();
            $table->dateTime('horariofin')->nullable();
            
            $table->unsignedBigInteger('reserva_id')->nullable(); // Cambiado 'CeDe_id' por 'centro_deportivo_id'

            $table->foreign('reserva_id') // Cambiado 'CeDe_id' por 'centro_deportivo_id'
                ->references('id')
                ->on('reservas')
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
        Schema::dropIfExists('horario_reservas');
    }
};
