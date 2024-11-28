<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKonsultasiTable extends Migration
{
    public function up()
    {
        Schema::create('konsultasi', function (Blueprint $table) {
            $table->id('konsultasiID');
            $table->string('userID', 50);
            $table->text('riwayatKonsultasi');
            $table->text('hasilKonsultasi')->nullable();
            $table->text('gejala')->nullable();
            $table->date('tanggal');
            $table->timestamps();

            $table->foreign('userID')->references('userID')->on('user')->onDelete('cascade')->onUpdate('cascade');
            $table->index(['userID', 'tanggal']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('konsultasi');
    }
}
