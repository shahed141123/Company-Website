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
        Schema::create('accounts_receivables', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rfq_id')->comment('rfqs');
            $table->string('payment_type')->nullable();
            $table->date('po_date')->nullable();
            $table->date('due_date')->nullable();
            $table->string('client_po_number')->nullable();
            $table->string('client_name')->nullable();
            $table->string('client_po')->nullable()->comment('file');
            $table->string('invoice')->nullable()->comment('file');
            $table->double('client_amount')->nullable();
            $table->string('client_payment_status')->nullable();
            $table->double('client_payment_value')->nullable();
            $table->string('client_money_receipt')->nullable();
            $table->string('credit_days')->nullable();
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
        Schema::dropIfExists('accounts_receivables');
    }
};
