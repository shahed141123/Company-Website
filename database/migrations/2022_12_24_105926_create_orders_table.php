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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id')->nullable();
            $table->unsignedBigInteger('partner_id')->nullable();
            $table->unsignedBigInteger('rfq_id')->nullable();
            $table->string('order_number')->nullable();
            $table->enum('client_type',['client','partner'])->default('client')->nullable();
            $table->string('invoice_no')->nullable();
            $table->string('work_order')->nullable()->comment('file');
            $table->string('work_order_no')->nullable()->comment('number');

            $table->enum('order_type',['online','deal'])->default('online')->nullable();

            $table->string('billing_name');
            $table->string('billing_phone');
            $table->string('billing_email');
            $table->text('billing_address')->nullable();
            $table->string('billing_city')->nullable();
            $table->string('billing_company_name')->nullable();
            $table->integer('billing_postal')->nullable();
            $table->string('billing_country')->nullable();

            $table->string('shipping_name');
            $table->string('shipping_phone');
            $table->string('shipping_email');
            $table->text('shipping_address')->nullable();
            $table->string('shipping_city')->nullable();
            $table->string('shipping_company_name')->nullable();
            $table->integer('shipping_postal')->nullable();
            $table->string('shipping_country')->nullable();

            $table->text('notes')->nullable();

            $table->string('payment_type')->nullable();
            $table->string('payment_method')->nullable();

            $table->string('proforma_invoice')->nullable();
            $table->string('invoice')->nullable();
            $table->string('transaction_id')->nullable();
            $table->string('payment_slip')->nullable();

            $table->string('currency')->nullable();
            $table->double('amount')->nullable();
            $table->double('tax')->nullable();
            $table->double('gst')->nullable();
            $table->double('delivery_charge')->nullable();
            $table->double('packaging_charge')->nullable();



            $table->string('order_date')->nullable();
            $table->string('order_month')->nullable();
            $table->string('order_year')->nullable();
            $table->string('confirmed_date')->nullable();
            $table->string('processing_date')->nullable();
            $table->string('picked_date')->nullable();
            $table->string('shipped_date')->nullable();
            $table->string('delivered_date')->nullable();
            $table->string('cancel_date')->nullable();
            $table->string('return_date')->nullable();
            $table->string('return_reason')->nullable();
            $table->string('status')->nullable();
            $table->foreign('client_id')->references('id')->on('clients')->onUpdate('cascade');
            $table->foreign('partner_id')->references('id')->on('partners')->onUpdate('cascade');
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
        Schema::dropIfExists('orders');
    }
};
