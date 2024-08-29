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
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('senombre');
            $table->string('apellido');
            $table->string('seapellido');
            $table->string('email')->unique();
            $table->string('telefono');
            $table->string('direccion');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->unsignedBigInteger('municipio_id')->nullable();

            $table->foreign('municipio_id') 
                ->references('id')
                ->on('municipios')
                ->onDelete('set null')
                ->onUpdate('set null');

            $table->unsignedBigInteger('tipo_persona_id')->nullable(); 

            $table->foreign('tipo_persona_id') 
                    ->references('id')
                    ->on('tipo_personas')
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
        Schema::dropIfExists('personas');
    }
};
