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
        Schema::create('rfq_order_statuses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rfq_id')->nullable();
            $table->string('order_status')->nullable();
            $table->enum('processing_status',['processed','not_processed'])->nullable();
            $table->enum('delivery_status',['delivered','not_delivered'])->nullable();
            $table->double('client_price')->nullable();
            $table->enum('client_price_status',['adv_received','not_received','half_received','received'])->nullable();
            $table->string('principles_name')->nullable();
            $table->double('principles_price')->nullable();
            $table->double('principles_payment')->nullable();
            $table->enum('principles_payment_status',['adv_paid','not_paid','half_paid','paid'])->nullable();
            $table->foreign('rfq_id')->references('id')->on('rfqs')->onUpdate('cascade');
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
        Schema::dropIfExists('rfq_order_statuses');
    }
};
