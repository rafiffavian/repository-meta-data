<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatabaseRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('database_roles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_sim')->unsigned()->nullable();
            $table->bigInteger('id_database')->unsigned()->nullable();
            $table->bigInteger('id_user')->unsigned()->nullable();
            $table->string('permission')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('database_roles');
    }
}
