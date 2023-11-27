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
        Schema::create('deal_sas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rfq_id');
            $table->string('rfq_code')->nullable();
            $table->date('create')->nullable();
            $table->string('item_name')->nullable();
            $table->integer('qty')->nullable();
            $table->double('unit_price')->nullable();
            $table->double('cog_price')->nullable();
            $table->double('regular_discount')->nullable();
            $table->double('discounted_sales')->nullable();
            $table->double('sales_price')->nullable();
            $table->double('sub_total_cost')->nullable();
            $table->double('sub_total_discounted_sales')->nullable();
            $table->double('sub_total_sales')->nullable();
            $table->double('special_discount')->nullable();
            $table->double('special_discounted_sales')->nullable();
            $table->double('tax')->nullable();
            $table->double('tax_sales')->nullable();
            $table->double('grand_total')->nullable();
            $table->double('bank_charge')->nullable();
            $table->double('customs')->nullable();
            $table->double('utility_cost')->nullable();
            $table->double('shiping_cost')->nullable();
            $table->double('sales_comission')->nullable();
            $table->double('liability')->nullable();
            $table->double('regular_discounts')->nullable();
            $table->double('rebates')->nullable();
            $table->double('capital_share')->nullable();
            $table->double('management_cost')->nullable();
            $table->double('net_profit_percentage')->nullable();
            $table->double('net_profit_amount')->nullable();
            $table->double('gross_profit_subtotal')->nullable();
            $table->double('gross_profit_amount')->nullable();
            $table->foreign('rfq_id')->references('id')->on('rfqs')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('deal_sas');
    }
};
