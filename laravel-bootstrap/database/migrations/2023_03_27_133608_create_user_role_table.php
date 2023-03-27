<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Laravel names the pivot table (linking table) with the joint names of the two tables in the many-to-many relationship
        // Laravel does this in alphabetical order which would be role_user
        // However I think role_user makes more sense for the table name
        Schema::create('user_role', function (Blueprint $table) {
            $table->id();
            // these atributes must be the same datatype as the id's that are defined in the users and roles tables
            // which are unnasigned to bigInts
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('role_id')->unsigned();
            $table->timestamps();

            // add foreign keys - ids from the users and roles table
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('role_id')->references('id')->on('roles')->onUpdate('cascade')->onDelete('restrict');

            // foreign key lines were creating errors - had to place manually
        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_role');
    }
};
