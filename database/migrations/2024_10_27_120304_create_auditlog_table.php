<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuditlogTable extends Migration
{
    public function up()
    {
        Schema::create('auditlog', function (Blueprint $table) {
            $table->id('logID');
            $table->string('userID', 50);
            $table->string('aktivitas', 255);
            $table->timestamp('tanggalWaktu')->useCurrent();
            $table->timestamps();

            $table->foreign('userID')->references('userID')->on('user')->onDelete('cascade');
            $table->index(['userID', 'tanggalWaktu']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('auditlog');
    }
}
