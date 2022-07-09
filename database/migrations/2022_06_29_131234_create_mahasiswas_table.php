<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->foreign('user_id')->refrences('id')->on('users');
            $table->string('nim');
            $table->string('nama_mhs');
            $table->bigInteger('fakultas_id')->foreign('fakultas_id')->refrences('id')->on('fakultas');
            $table->bigInteger('prodi_id')->foreign('prodi_id')->refrences('id')->on('prodi');
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
        Schema::dropIfExists('mahasiswas');
    }
}
