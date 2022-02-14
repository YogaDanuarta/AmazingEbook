<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('ebooks', function (Blueprint $table) {
            $table->integer('ebook_id')->autoIncrement();
            $table->string('title', 255)->nullable();
            $table->string('author', 255)->nullable();
            $table->longText('description');
        });
    }

    public function down()
    {
        Schema::dropIfExists('ebooks');
    }
};
