<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNutritionplanTable extends Migration
{
    public function up()
    {
        Schema::create('nutritionplan', function (Blueprint $table) {
            $table->id('nutritionPlanID');
            $table->string('nutritionPlanName', 50)->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('nutritionplan');
    }
}
