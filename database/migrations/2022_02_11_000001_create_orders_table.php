<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->integer('order_id')->autoIncrement();

            $table->string('account_id', 255);
            $table->foreign('account_id')->references('account_id')->on('accounts')->onUpdate('cascade')->onDelete('cascade');

            $table->integer('ebook_id');
            $table->foreign('ebook_id')->references('ebook_id')->on('ebooks')->onUpdate('cascade')->onDelete('cascade');

            $table->date('order_date')->default(Carbon::now());
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
