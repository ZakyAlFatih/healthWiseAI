<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekomendasiaktivitasfisikTable extends Migration
{
    public function up()
    {
        Schema::create('rekomendasiaktivitasfisik', function (Blueprint $table) {
            $table->id('aktivitasID');
            $table->string('userID', 50);
            $table->enum('tipeLatihan', ['Cardio', 'Strength', 'Flexibility', 'Balance', 'Endurance']);
            $table->smallInteger('durasi')->unsigned()->nullable();
            $table->date('tanggal');
            $table->timestamps();

            $table->foreign('userID')->references('userID')->on('user')->onDelete('cascade')->onUpdate('cascade');
            $table->index(['userID', 'tanggal']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('rekomendasiaktivitasfisik');
    }
}
