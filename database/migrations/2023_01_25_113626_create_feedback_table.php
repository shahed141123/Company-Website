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
        Schema::create('feedback', function (Blueprint $table) {
            $table->id();
            $table->enum('product_details',['1','2','3','4','5'])->nullable();
            $table->enum('articles',['1','2','3','4','5'])->nullable();
            $table->enum('purchasing',['1','2','3','4','5'])->nullable();
            $table->enum('pricing',['1','2','3','4','5'])->nullable();
            $table->enum('solutions',['1','2','3','4','5'])->nullable();
            $table->enum('search',['1','2','3','4','5'])->nullable();
            $table->enum('filtering',['1','2','3','4','5'])->nullable();
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
        Schema::dropIfExists('feedback');
    }
};
