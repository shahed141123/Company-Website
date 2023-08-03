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
        Schema::create('brand_pages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('brand_id');
            $table->unsignedBigInteger('solution_card_one_id')->nullable();
            $table->unsignedBigInteger('solution_card_two_id')->nullable();
            $table->unsignedBigInteger('solution_card_three_id')->nullable();
            $table->unsignedBigInteger('row_four_id')->nullable();
            $table->unsignedBigInteger('row_five_id')->nullable();
            $table->unsignedBigInteger('row_seven_id')->nullable();
            $table->unsignedBigInteger('row_eight_id')->nullable();

            $table->text('header');
            $table->string('row_one_title')->nullable();
            $table->text('row_one_header')->nullable();
            $table->string('row_six_image')->comment('1920*1080');
            $table->string('banner_image')->comment('1800*625');
            $table->string('brand_logo')->nullable();
            $table->string('row_six_title')->nullable();
            $table->text('row_six_header')->nullable();
            $table->string('row_nine_title')->nullable();
            $table->text('row_nine_header')->nullable();
            $table->string('added_by')->nullable();

            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('solution_card_one_id')->references('id')->on('solution_cards')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('solution_card_two_id')->references('id')->on('solution_cards')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('solution_card_three_id')->references('id')->on('solution_cards')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('row_four_id')->references('id')->on('rows')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('row_five_id')->references('id')->on('rows')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('row_seven_id')->references('id')->on('rows')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('row_eight_id')->references('id')->on('rows')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('brand_pages');
    }
};
