<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->string('userID', 50)->primary();
            $table->string('username', 50)->unique();
            $table->string('password');
            $table->string('name', 100);
            $table->string('email', 100)->unique();
            $table->date('tanggalLahir');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user');
    }
}
