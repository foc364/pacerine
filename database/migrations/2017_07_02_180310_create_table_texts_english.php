<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTextsEnglish extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('texts_english', function (Blueprint $table) {
            $table->increments('id');
            $table->text('about')->nullable();
            $table->string('about_li')->nullable();
            $table->string('about_li_2')->nullable();
            $table->string('about_li_3')->nullable();
            $table->text('about_experience')->nullable();
            $table->text('about_conclusion')->nullable();
            $table->text('service_1')->nullable();
            $table->text('service_2')->nullable();
            $table->text('service_3')->nullable();
            $table->text('service_4')->nullable();
            $table->text('service_5')->nullable();
            $table->text('service_6')->nullable();
            $table->text('service_7')->nullable();
            $table->string('schedule')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('texts_english');
    }
}
