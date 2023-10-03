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
        Schema::create('ticket_vendidos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('event_id');
            $table->decimal('precio', 8, 2);
            $table->timestamps();
        });

        // Agregar restricción de clave foránea
        Schema::table('ticket_vendidos', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('usuario_eventos');
            $table->foreign('event_id')->references('id')->on('eventos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ticket_vendidos');
    }
};

