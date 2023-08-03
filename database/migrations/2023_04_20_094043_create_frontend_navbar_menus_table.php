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
        Schema::create('frontend_navbar_menus', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('frontend_navbar_module_id')->nullable();
            $table->string('name')->nullable();
            $table->string('short_description')->nullable();
            $table->string('link')->nullable();
            $table->foreign('frontend_navbar_module_id')->references('id')->on('frontend_navbar_modules')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('frontend_navbar_menus');
    }
};
