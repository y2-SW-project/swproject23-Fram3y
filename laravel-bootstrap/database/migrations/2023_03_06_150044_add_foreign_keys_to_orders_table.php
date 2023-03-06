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
        Schema::table('orders', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('cinema_id');
            $table->unsignedBigInteger('screening_id');

            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('cinema_id')->references('id')->on('cinemas')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('screening_id')->references('id')->on('screening')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');

            $table->dropForeign(['cinema_id']);
            $table->dropColumn('cinema_id');

            $table->dropForeign(['screening_id']);
            $table->dropColumn('screening_id');
        });
    }
};
