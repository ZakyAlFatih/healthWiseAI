<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('rekomendasi', function (Blueprint $table) {
            $table->id('recomID'); // kolom recomID (primary key)
            $table->string('userID', 50); // kolom userID (relasi dengan tabel user)
            $table->text('foodrecom'); // kolom foodrecom (rekomendasi makanan)
            $table->text('exerrecom'); // kolom exerrecom (rekomendasi olahraga)
            $table->timestamps(); // kolom created_at dan updated_at

            $table->foreign('userID')->references('userID')->on('user')->onDelete('cascade')->onUpdate('cascade');
            $table->index(['userID']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rekomendasi');
    }
};
