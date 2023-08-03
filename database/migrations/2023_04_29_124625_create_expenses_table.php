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
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('expense_category')->nullable();
            $table->unsignedBigInteger('expense_type')->nullable();
            $table->date('date')->nullable();
            $table->string('month')->nullable();
            $table->string('category')->nullable();
            $table->string('type')->nullable();
            $table->string('particulars')->nullable();
            $table->string('voucher')->nullable()->comment('file');
            $table->double('amount')->nullable();
            $table->text('comment')->nullable();
            $table->foreign('expense_category')->references('id')->on('expense_categories')->onUpdate('cascade');
            $table->foreign('expense_type')->references('id')->on('expense_types')->onUpdate('cascade');
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
        Schema::dropIfExists('expenses');
    }
};
