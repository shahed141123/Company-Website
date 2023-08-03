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
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('row_one_id')->nullable();
            $table->unsignedBigInteger('row_two_id')->nullable();
            $table->unsignedBigInteger('row_three_id')->nullable();
            $table->string('banner_title')->nullable();
            $table->string('banner_image')->nullable();
            $table->text('banner_short_description')->nullable();
            $table->string('row_four_title')->nullable();
            $table->string('video_row_title')->nullable();
            $table->text('video_row_short_description')->nullable();
            $table->string('video_link')->nullable();
            $table->foreign('row_one_id')->references('id')->on('rows')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('row_two_id')->references('id')->on('rows')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('row_three_id')->references('id')->on('rows')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('about_us');
    }
};
