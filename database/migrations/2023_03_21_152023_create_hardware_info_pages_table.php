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
        Schema::create('hardware_info_pages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('row_five_tab_one_id')->nullable();
            $table->unsignedBigInteger('row_five_tab_two_id')->nullable();
            $table->unsignedBigInteger('row_five_tab_three_id')->nullable();
            $table->unsignedBigInteger('row_five_tab_four_id')->nullable();
            $table->string('banner_image')->nullable();
            $table->string('banner_title')->nullable();
            $table->string('banner_short_description')->nullable();
            $table->string('banner_btn_name')->nullable();
            $table->string('banner_btn_link')->nullable();
            $table->string('row_two_title')->nullable();
            $table->string('row_two_short_description')->nullable();
            $table->string('row_four_title')->nullable();
            $table->string('row_four_sub_title')->nullable();
            $table->string('row_four_short_description')->nullable();
            $table->string('row_four_video_link')->nullable();
            $table->string('row_four_btn_name')->nullable();
            $table->string('row_four_btn_link')->nullable();
            $table->string('row_five_title')->nullable();
            $table->string('row_five_short_description')->nullable();
            $table->string('row_six_title')->nullable();
            $table->string('row_six_short_description')->nullable();
            $table->string('row_six_btn_name')->nullable();
            $table->string('row_six_btn_link')->nullable();
            $table->string('row_six_image')->nullable();
            $table->string('row_seven_title')->nullable();
            $table->string('row_eight_title')->nullable();
            $table->string('row_eight_short_description')->nullable();
            $table->foreign('row_five_tab_one_id')->references('id')->on('rows')->onUpdate('cascade');
            $table->foreign('row_five_tab_two_id')->references('id')->on('rows')->onUpdate('cascade');
            $table->foreign('row_five_tab_three_id')->references('id')->on('rows')->onUpdate('cascade');
            $table->foreign('row_five_tab_four_id')->references('id')->on('rows')->onUpdate('cascade');
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
        Schema::dropIfExists('hardware_info_pages');
    }
};
