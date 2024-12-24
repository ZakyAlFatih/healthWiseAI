<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->string('userID', 50)->primary();
            $table->string('password');
            $table->string('firstname', 100);
            $table->string('lastname', 100);
            $table->string('phone', 15);
            $table->string('email', 100)->unique();
            $table->date('tanggalLahir')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user');
    }
}
