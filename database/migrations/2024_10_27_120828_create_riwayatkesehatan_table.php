<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiwayatkesehatanTable extends Migration
{
    public function up()
    {
        Schema::create('riwayatkesehatan', function (Blueprint $table) {
            $table->id('riwayatID');
            $table->string('userID', 50);
            $table->decimal('beratBadan', 5, 2)->nullable();
            $table->decimal('tinggiBadan', 5, 2)->nullable();
            $table->enum('gender', ['Male', 'Female', 'Other']);
            $table->unsignedBigInteger('activityLevelID');
            $table->timestamps();

            $table->foreign('userID')->references('userID')->on('user')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('activityLevelID')->references('activityLevelID')->on('activitylevel')->onDelete('cascade')->onUpdate('cascade');
            $table->index(['userID']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('riwayatkesehatan');
    }
}
