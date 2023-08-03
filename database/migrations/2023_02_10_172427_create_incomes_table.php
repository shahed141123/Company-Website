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
        Schema::create('incomes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rfq_id')->nullable();
            $table->unsignedBigInteger('order_id')->nullable();
            $table->date('date')->nullable();
            $table->string('month')->nullable();
            $table->string('po_reference')->nullable();
            $table->enum('type',['corporate','online'])->nullable();
            $table->string('client_name')->nullable();
            $table->double('amount')->nullable();
            $table->double('received_value')->nullable();
            $table->foreign('rfq_id')->references('id')->on('rfqs')->onUpdate('cascade');
            $table->foreign('order_id')->references('id')->on('orders')->onUpdate('cascade');
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
        Schema::dropIfExists('incomes');
    }
};
