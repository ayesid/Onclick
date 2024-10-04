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
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cancha_id'); // Relación con la tabla canchas
            $table->string('nombre_cliente'); // Nombre del cliente
            $table->string('telefono_cliente'); // Teléfono del cliente
            $table->string('email_cliente'); // Email del cliente
            $table->dateTime('fecha_reserva'); // Fecha y hora de la reserva
            $table->integer('duracion'); // Duración de la reserva en horas
            $table->decimal('total_precio', 8, 2); // Precio total basado en la duración
            $table->timestamps();

            // Relación con la tabla canchas
            $table->foreign('cancha_id')
                ->references('id')
                ->on('canchas')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
