<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporankesehatanTable extends Migration
{
    public function up()
    {
        Schema::create('laporankesehatan', function (Blueprint $table) {
            $table->id('reportID');
            $table->string('userID', 50);
            $table->mediumInteger('jumlahLangkah')->unsigned()->nullable();
            $table->mediumInteger('jumlahAirMinum')->unsigned()->nullable();
            $table->mediumInteger('jumlahKalori')->unsigned()->nullable();
            $table->mediumInteger('durasiTidur')->unsigned()->nullable();
            $table->date('tanggal');
            $table->timestamps();

            $table->foreign('userID')->references('userID')->on('user')->onDelete('cascade')->onUpdate('cascade');
            $table->index(['userID', 'tanggal']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('laporankesehatan');
    }
}
