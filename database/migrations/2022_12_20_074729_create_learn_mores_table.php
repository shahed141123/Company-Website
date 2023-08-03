<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('learn_mores', function (Blueprint $table) {
            $table->id();
            $table->string('badge');
            $table->string('title')->nullable();
            $table->string('image_banner')->comment('h:1672px w:620px');
            $table->string('background_image')->comment('h:1500px w:1000px');
            $table->text('header_one')->nullable();
            $table->text('header_two')->nullable();
            $table->string('box_one_title')->nullable();
            $table->longText('box_one_short_des')->nullable();
            $table->string('box_one_link')->nullable();
            $table->string('box_two_title')->nullable();
            $table->longText('box_two_short_des')->nullable();
            $table->string('box_two_link')->nullable();
            $table->string('box_three_title');
            $table->longText('box_three_short_des')->nullable();
            $table->string('box_three_link')->nullable();
            $table->string('success_story_title')->nullable();
            $table->string('success_story_one_id')->nullable();
            $table->string('success_story_two_id')->nullable();
            $table->string('success_story_three_id')->nullable();
            $table->string('footer')->nullable();
            $table->string('consult_title')->nullable();
            $table->longText('consult_short_des')->nullable();
            $table->string('industry_header')->nullable();
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
        Schema::dropIfExists('learn_mores');
    }
};
