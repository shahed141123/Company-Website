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
        Schema::create('payment_method_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('region_id'); //region_name-show-in-view
            $table->string('type')->nullable()->comment('card,bank,ach,check,online-paypal,online-payoneer,stripe');
            $table->string('card_link')->nullable();
            $table->string('card_note')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('bank_address')->nullable();
            $table->string('account_name')->nullable();
            $table->string('account_address')->nullable();
            $table->string('account_type')->nullable();
            $table->string('branch')->nullable();
            $table->string('routing')->nullable();
            $table->string('check_address')->nullable();
            $table->string('check_note')->nullable();
            $table->double('gst')->nullable();
            $table->foreign('region_id')->references('id')->on('regions')->onUpdate('cascade');
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
        Schema::dropIfExists('payment_method_details');
    }
};
