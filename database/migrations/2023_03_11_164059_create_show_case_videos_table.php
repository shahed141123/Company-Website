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
        Schema::create('show_case_videos', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['sales', 'technical'])->nullable();
            $table->string('category_id')->nullable()->comment('multi_id');
            $table->string('industry_id')->nullable()->comment('multi_id');
            $table->string('brand_id')->nullable()->comment('multi_id');
            $table->string('url')->nullable();
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
        Schema::dropIfExists('show_case_videos');
    }
};
