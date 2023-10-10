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
            $table->unsignedBigInteger('cliente_id');
            $table->unsignedBigInteger('ruta_id');
            $table->date("fecha_inicio");
            $table->date('fecha_fin');
            $table->string('costo_total');
            $table->string('estadoreserva');
            $table->string('numeropasajeros');
            $table->string('costoxpersona');
            $table->foreign('cliente_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('ruta_id')->references('id')->on('rutas')->onDelete('cascade');
            $table->timestamps();
        });
        
       
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
