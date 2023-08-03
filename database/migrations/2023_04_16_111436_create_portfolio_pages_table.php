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
        Schema::create('portfolio_pages', function (Blueprint $table) {
            $table->id();
            $table->string('banner_title')->nullable();
            $table->string('banner_short_desc')->nullable();
            $table->string('banner_btn_name')->nullable();
            $table->string('banner_btn_link')->nullable();
            $table->string('choose_us_badge')->nullable();
            $table->string('choose_us_title')->nullable();
            $table->string('choose_us_short_desc')->nullable();
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
        Schema::dropIfExists('portfolio_pages');
    }
};
