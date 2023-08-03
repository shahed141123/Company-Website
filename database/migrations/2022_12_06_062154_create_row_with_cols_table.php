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
        Schema::create('row_with_cols', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('col_one_title')->nullable();
            $table->text('col_one_des')->nullable();
            $table->string('col_one_btn_name')->nullable();
            $table->string('col_one_link')->nullable();
            $table->string('col_two_title')->nullable();
            $table->text('col_two_des')->nullable();
            $table->string('col_two_btn_name')->nullable();
            $table->string('col_two_link')->nullable();
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
        Schema::dropIfExists('row_with_cols');
    }
};
