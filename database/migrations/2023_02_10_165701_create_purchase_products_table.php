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
        Schema::create('purchase_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rfq_id')->nullable();
            $table->unsignedBigInteger('purchase_id');
            $table->string('sku_code')->nullable();
            $table->string('product_name')->nullable();
            $table->string('client_name')->nullable();
            $table->bigInteger('qty')->nullable();
            $table->double('unit_price')->nullable();
            $table->double('sub_total')->nullable();
            $table->double('amount')->nullable();
            $table->foreign('rfq_id')->references('id')->on('rfqs')->onUpdate('cascade');
            $table->foreign('purchase_id')->references('id')->on('purchases')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('purchase_products');
    }
};
