<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumni', function (Blueprint $table) {
            $table->id();
            $table->integer('nisn');
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->integer('tahun_masuk');
            $table->integer('tahun_lulus');
            $table->date('tgl_lahir');
            $table->string('tempat_lahir');
            $table->text('alamat');
            $table->string('email');
            $table->string('no_telp');
            $table->string('foto');
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
        Schema::dropIfExists('alumni');
    }
}
