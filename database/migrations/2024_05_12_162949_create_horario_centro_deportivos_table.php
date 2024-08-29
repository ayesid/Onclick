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
        Schema::create('horario_centro_deportivos', function (Blueprint $table) {
            $table->id();
            $table->time('horarioapertura')->nullable();
            $table->time('horariocierre')->nullable();
            $table->unsignedBigInteger('centro_deportivo_id')->nullable(); // Cambiado 'CeDe_id' por 'centro_deportivo_id'

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
        Schema::dropIfExists('horario_centro_deportivos');
    }
};
