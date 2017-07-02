<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableConfigsEnglish extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configs_english', function (Blueprint $table) {
            $table->increments('id');
            $table->text('time')->nullable();
            $table->text('text_home')->nullable();
            $table->text('text_about')->nullable();
            $table->text('text_orientation')->nullable();
            $table->text('text_orientation_1')->nullable();
            $table->string('schedule')->nullable();
            $table->string('phone')->nullable();
            $table->string('phone_2')->nullable();
            $table->string('contact_email')->nullable();
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
        Schema::dropIfExists('configs_english');
    }
}
