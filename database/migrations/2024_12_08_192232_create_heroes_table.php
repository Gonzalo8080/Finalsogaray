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
        Schema::create('heroes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apodo');
            $table->enum('rol', ['guerrero', 'distancia', 'tanque', 'sanador']);
            $table->enum('elemento', ['fuego', 'tierra', 'agua', 'basico', 'luz', 'oscuridad']);
            $table->enum('arma', ['espada y escudo', 'espada de 2 manos', 'pistola', 'arco', 'báculo', 'guante', 'garra', 'cesta']);
            $table->integer('edad');
            $table->string('especie');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('heroes');
    }
};
