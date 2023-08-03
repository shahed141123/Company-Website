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
        Schema::create('marketing_manager_roles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('marketing_manager_id');
            $table->enum('dmar',['yes','no'])->nullable();
            $table->enum('cmar',['yes','no'])->nullable();
            $table->enum('emar',['yes','no'])->nullable();
            $table->foreign('marketing_manager_id')->references('id')->on('users')->onUpdate('cascade');
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
        Schema::dropIfExists('marketing_manager_roles');
    }
};
