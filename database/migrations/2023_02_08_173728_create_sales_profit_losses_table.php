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
        Schema::create('sales_profit_losses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rfq_id')->comment('rfqs');
            $table->enum('client_type',['client','partner'])->nullable();
            $table->text('item_description')->nullable();
            $table->double('sales_price')->nullable();
            $table->double('cost_price')->nullable();
            $table->double('gross_makup_percentage')->nullable();
            $table->double('gross_makup_ammount')->nullable();
            $table->double('net_profit_percentage')->nullable();
            $table->double('net_profit_ammount')->nullable();
            $table->double('profit')->nullable();
            $table->double('loss')->nullable();
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
        Schema::dropIfExists('sales_profit_losses');
    }
};
