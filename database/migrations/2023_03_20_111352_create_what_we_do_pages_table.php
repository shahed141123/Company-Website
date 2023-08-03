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
        Schema::create('what_we_do_pages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('row_two_id')->nullable();
            $table->unsignedBigInteger('row_three_id')->nullable();
            $table->string('bannner_title')->nullable();
            $table->string('bannner_description')->nullable();
            $table->string('bannner_btn_one_name')->nullable();
            $table->string('bannner_btn_one_link')->nullable();
            $table->string('bannner_btn_one_icon')->nullable();
            $table->string('bannner_btn_two_name')->nullable();
            $table->string('bannner_btn_two_link')->nullable();
            $table->string('bannner_btn_two_icon')->nullable();
            $table->string('bannner_btn_three_name')->nullable();
            $table->string('bannner_btn_three_link')->nullable();
            $table->string('bannner_btn_three_icon')->nullable();
            $table->string('bannner_btn_four_name')->nullable();
            $table->string('bannner_btn_four_link')->nullable();
            $table->string('bannner_btn_four_icon')->nullable();
            $table->string('row_one_header')->nullable();
            $table->string('row_one_short_description')->nullable();
            $table->string('row_one_image')->nullable();
            $table->string('row_one_sub_title')->nullable();
            $table->string('row_one_sub_description')->nullable();
            $table->string('row_one_btn_one_name')->nullable();
            $table->string('row_one_btn_one_link')->nullable();
            $table->string('row_one_btn_one_icon')->nullable();
            $table->string('row_one_btn_two_name')->nullable();
            $table->string('row_one_btn_two_link')->nullable();
            $table->string('row_one_btn_two_icon')->nullable();
            $table->string('row_one_btn_three_name')->nullable();
            $table->string('row_one_btn_three_link')->nullable();
            $table->string('row_one_btn_three_icon')->nullable();
            $table->string('row_one_btn_four_name')->nullable();
            $table->string('row_one_btn_four_link')->nullable();
            $table->string('row_one_btn_four_icon')->nullable();
            $table->string('row_one_btn_five_name')->nullable();
            $table->string('row_one_btn_five_link')->nullable();
            $table->string('row_one_btn_five_icon')->nullable();
            $table->string('row_one_btn_six_name')->nullable();
            $table->string('row_one_btn_six_link')->nullable();
            $table->string('row_one_btn_six_icon')->nullable();
            $table->string('row_one_btn_seven_name')->nullable();
            $table->string('row_one_btn_seven_link')->nullable();
            $table->string('row_one_btn_seven_icon')->nullable();
            $table->string('row_one_btn_eight_name')->nullable();
            $table->string('row_one_btn_eight_link')->nullable();
            $table->string('row_one_btn_eight_icon')->nullable();
            $table->foreign('row_three_id')->references('id')->on('rows')->onUpdate('cascade')->nullable();
            $table->foreign('row_two_id')->references('id')->on('rows')->onUpdate('cascade')->nullable();
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
        Schema::dropIfExists('what_we_do_pages');
    }
};
