<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NewsTable extends Migration
{

    public function up()
    {
         Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kata');
            $table->string('category');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('news');
    }
}
