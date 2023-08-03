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
        Schema::create('accounts_payables', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rfq_id')->comment('rfqs');
            $table->string('payment_type')->nullable();
            $table->string('invoice')->nullable()->comment('file');
            $table->string('po_value')->nullable();
            $table->date('due_date')->nullable();
            $table->string('principal_name')->nullable();
            $table->string('principal_po')->nullable()->comment('file');
            $table->string('principal_po_number')->nullable();
            $table->double('principal_amount')->nullable();
            $table->string('principal_payment_status')->nullable();
            $table->double('principal_payment_value')->nullable();
            $table->date('delivery_date')->nullable();
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
        Schema::dropIfExists('accounts_payables');
    }
};
