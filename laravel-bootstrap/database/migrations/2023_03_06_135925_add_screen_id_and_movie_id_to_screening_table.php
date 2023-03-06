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
        Schema::table('screening', function (Blueprint $table) {
            $table->unsignedBigInteger('screen_id');
            $table->unsignedBigInteger('movie_id');

            $table ->foreign('screen_id')->references('id')->on('screens')->onUpdate('cascade')->onDelete('restrict');
            $table ->foreign('movie_id')->references('id')->on('movies')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('screening', function (Blueprint $table) {
            $table->dropForeign(['screen_id']);
            $table->dropColumn('screen_id');

            $table->dropForeign(['movie_id']);
            $table->dropColumn('movie_id');
        });
    }
};
