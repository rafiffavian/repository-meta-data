<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIsiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('isi_table', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('name')->nullable();
            $table->longText('null?')->nullable();
            $table->longText('type')->nullable();
            $table->longText('keterangan')->nullable();
            $table->longText('sampel_data')->nullable();
            $table->longText('relasi')->nullable();
            $table->bigInteger('id_table')->unsigned()->nullable();
            $table->bigInteger('id_user')->unsigned()->nullable();
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
        Schema::dropIfExists('isi');
    }
}
