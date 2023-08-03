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
        Schema::create('portfolio_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->string('banner_title')->nullable();
            $table->string('banner_short_desc')->nullable();
            $table->string('banner_image')->nullable()->comment('image');
            $table->string('banner_btn_link')->nullable();
            $table->string('banner_btn_name')->nullable();
            $table->string('row_one_image')->nullable()->comment('image');
            $table->string('row_one_logo')->nullable()->comment('image');
            $table->string('row_one_title')->nullable();
            $table->text('row_one_description')->nullable()->comment('text-editor');
            $table->string('row_one_btn_link')->nullable();
            $table->string('row_one_btn_name')->nullable();
            $table->string('gallery_title')->nullable();
            $table->string('gallery_short_desc')->nullable();
            $table->string('gallery_image_one')->nullable()->comment('image');
            $table->string('gallery_image_two')->nullable()->comment('image');
            $table->string('gallery_image_three')->nullable()->comment('image');
            $table->string('gallery_image_one_title')->nullable();
            $table->string('gallery_image_one_short_description')->nullable();
            $table->string('gallery_image_two_title')->nullable();
            $table->string('gallery_image_two_short_description')->nullable();
            $table->string('gallery_image_three_title')->nullable();
            $table->string('gallery_image_three_short_description')->nullable();
            $table->string('feature_one_title')->nullable();
            $table->text('feature_one_description')->nullable();
            $table->string('feature_two_title')->nullable();
            $table->text('feature_two_description')->nullable();
            $table->string('feature_three_title')->nullable();
            $table->text('feature_three_description')->nullable();
            $table->string('feature_four_title')->nullable();
            $table->text('feature_four_description')->nullable();
            $table->foreign('category_id')->references('id')->on('portfolio_categories')->onUpdate('cascade');
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
        Schema::dropIfExists('portfolio_details');
    }
};
