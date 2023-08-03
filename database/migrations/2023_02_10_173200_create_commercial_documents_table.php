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
        Schema::create('commercial_documents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rfq_id')->nullable();
            $table->unsignedBigInteger('order_id')->nullable();
            $table->string('client_pq')->nullable()->comment('file');
            $table->string('client_po')->nullable()->comment('file');
            $table->string('client_invoice')->nullable()->comment('file');
            $table->string('client_challan')->nullable()->comment('file');
            $table->string('client_payment')->nullable()->comment('file');
            $table->string('client_mushok')->nullable()->comment('file');
            $table->string('client_govt_challan')->nullable()->comment('file');
            $table->string('principal_pq')->nullable()->comment('file');
            $table->string('principal_po')->nullable()->comment('file');
            $table->string('principal_invoice')->nullable()->comment('file');
            $table->string('principal_challan')->nullable()->comment('file');
            $table->string('principal_payment')->nullable()->comment('file');
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
        Schema::dropIfExists('commercial_documents');
    }
};
