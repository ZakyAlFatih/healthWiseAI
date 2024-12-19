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
            $table->decimal('weight', 5, 2)->nullable(); // menggantikan beratBadan
            $table->decimal('height', 5, 2)->nullable(); // menggantikan tinggiBadan
            $table->enum('gender', ['Male', 'Female', 'Other']);
            $table->text('health_history')->nullable(); // menggantikan deskripsi riwayat kesehatan
            $table->text('symptoms')->nullable(); // menggantikan deskripsi aktivitas fisik
            $table->string('activity_level')->nullable(); // menggantikan activityLevelID
            $table->integer('step_count')->nullable(); // menggantikan jumlah langkah
            $table->integer('sleep_duration')->nullable(); // menggantikan durasi tidur
            $table->text('physical_activity')->nullable(); // menggantikan rincian aktivitas fisik
            $table->decimal('calories_burned', 6, 2)->nullable(); // menggantikan kalori yang terbakar
            $table->integer('sedentary_time')->nullable(); // menggantikan waktu duduk
            $table->integer('water_intake')->nullable(); // menggantikan asupan air
            $table->text('meal_log')->nullable(); // menggantikan catatan makan
            $table->integer('mood_level')->nullable(); // menggantikan tingkat mood
            $table->timestamps();

            $table->foreign('userID')->references('userID')->on('user')->onDelete('cascade')->onUpdate('cascade');
            $table->index(['userID']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('riwayatkesehatan');
    }
}
