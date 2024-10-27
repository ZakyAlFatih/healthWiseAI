<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitylevelTable extends Migration
{
    public function up()
    {
        Schema::create('activitylevel', function (Blueprint $table) {
            $table->id('activityLevelID');
            $table->string('activityLevelName', 50)->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('activitylevel');
    }
}
