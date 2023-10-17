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
        Schema::table('ticket_vendidos', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->foreign('user_id')->references('id')->on('usuario_eventos')->onDelete('cascade');
            $table->dropForeign(['event_id']);
            $table->foreign('event_id')->references('id')->on('eventos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ticket_vendidos', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->foreign('user_id')->references('id')->on('usuario_eventos');
            $table->dropForeign(['event_id']);
            $table->foreign('event_id')->references('id')->on('eventos');
        });
    }
};
