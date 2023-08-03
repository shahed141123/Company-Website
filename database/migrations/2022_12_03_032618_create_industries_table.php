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
        Schema::create('industries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->string('category')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->string('title')->nullable();
            $table->string('logo')->nullable();
            $table->string('image')->nullable();
            $table->text('short_desc')->nullable();
            $table->string('link')->nullable();
            $table->foreign('parent_id')->references('id')->on('industries')->onUpdate('cascade');
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
        Schema::dropIfExists('industries');
    }
};
