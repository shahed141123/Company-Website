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
        Schema::create('sales_forcasts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rfq_id')->nullable();
            $table->unsignedBigInteger('sales_man_id_L1')->nullable();
            $table->unsignedBigInteger('sales_man_id_T1')->nullable();
            $table->unsignedBigInteger('sales_man_id_T2')->nullable();

            $table->date('date')->nullable();
            $table->string('month')->nullable()->comment('allMonth');
            $table->string('quarter')->nullable()->comment('q1-q4');
            $table->string('partner_type')->nullable()->comment('client,partner,direct');
            $table->string('pq_reference')->nullable();
            $table->string('client_name')->nullable();
            $table->string('product_name')->nullable();
            $table->enum('forcast_type', ['promising', 'quoted', 'lost', 'closed'])->nullable();
            $table->double('value')->nullable();
            $table->string('order_status')->nullable();
            $table->enum('client_price_status', ['adv_received', 'not_received', 'half_received', 'received'])->nullable();
            $table->enum('principles_payment_status', ['adv_paid', 'not_paid', 'half_paid', 'paid'])->nullable();
            $table->date('delivery_dead_line')->nullable();
            $table->string('final_status')->nullable()->comment('promising', 'quoted', 'lost', 'closed');
            $table->string('work_order_number')->nullable();
            $table->string('work_order_pdf')->nullable();
            $table->string('client_po_number')->nullable();
            $table->string('client_po_pdf')->nullable();
            $table->string('contact_person')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('probability_status')->nullable()->comment('medium_controle', 'no_controle');
            $table->string('quotation_status')->nullable()->comment('medium_controle', 'no_controle');
            $table->string('probability_reason')->nullable()->comment('select option');
            $table->string('quotation_action')->nullable()->comment('followed_up', 'need_followed_up');
            $table->string('lost_level_one')->nullable()->comment('price_complexity', 'no_controlle', 'logical', 'tander_quote');
            $table->string('lost_level_tow')->nullable()->comment('need_followed_up', 'competitive_pricing');

            $table->foreign('rfq_id')->references('id')->on('rfqs')->onUpdate('cascade');
            $table->foreign('sales_man_id_L1')->references('id')->on('users')->onUpdate('cascade');
            $table->foreign('sales_man_id_T1')->references('id')->on('users')->onUpdate('cascade');
            $table->foreign('sales_man_id_T2')->references('id')->on('users')->onUpdate('cascade');
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
        Schema::dropIfExists('sales_forcasts');
    }
};
