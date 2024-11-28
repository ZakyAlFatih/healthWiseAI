<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekomendasimakananTable extends Migration
{
    public function up()
    {
        Schema::create('rekomendasimakanan', function (Blueprint $table) {
            $table->id('makananID');
            $table->string('userID', 50);
            $table->string('namaMakanan', 100);
            $table->smallInteger('jumlahKalori')->unsigned()->nullable();
            $table->unsignedBigInteger('nutritionPlanID');
            $table->date('tanggal');
            $table->timestamps();

            $table->foreign('userID')->references('userID')->on('user')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('nutritionPlanID')->references('nutritionPlanID')->on('nutritionplan')->onDelete('cascade')->onUpdate('cascade');
            $table->index(['userID', 'tanggal']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('rekomendasimakanan');
    }
}
