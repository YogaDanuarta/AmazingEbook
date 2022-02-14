<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('genders', function (Blueprint $table) {
            $table->integer('gender_id')->autoIncrement();
            $table->string('gender_desc', 25)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('genders');
    }
};
