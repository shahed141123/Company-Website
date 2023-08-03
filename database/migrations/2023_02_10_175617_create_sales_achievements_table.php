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
        Schema::create('sales_achievements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rfq_id')->nullable();
            $table->unsignedBigInteger('sales_man_id_L1')->nullable();
            $table->unsignedBigInteger('sales_man_id_T1')->nullable();
            $table->unsignedBigInteger('sales_man_id_T2')->nullable();
            $table->enum('quarter', ['q1', 'q2', 'q3', 'q4'])->nullable();
            $table->string('month')->nullable();
            $table->year('fiscal_year')->nullable();
            $table->enum('deal_type', ['new', 'renew'])->nullable();
            $table->double('deal_type_value')->nullable();
            //$table->double('total_')->nullable();
            $table->double('total_quoted_amount')->nullable();
            $table->double('shared_quote_percentage_L1')->nullable();
            $table->double('shared_quote_amount_L1')->nullable();
            $table->double('closed_ratio_L1')->nullable();
            $table->double('profit_margin_L1')->nullable();
            $table->double('effort_L1')->nullable();
            $table->string('perform_look_L1')->nullable();
            $table->double('rating_L1')->nullable();
            $table->double('incentive_percentage_L1')->nullable();
            $table->double('incentive_amount_L1')->nullable();
            $table->double('shared_quote_percentage_T1')->nullable();
            $table->double('shared_quote_amount_T1')->nullable();
            $table->double('closed_ratio_T1')->nullable();
            $table->double('profit_margin_T1')->nullable();
            $table->double('effort_T1')->nullable();
            $table->string('perform_look_T1')->nullable();
            $table->double('rating_T1')->nullable();
            $table->double('incentive_percentage_T1')->nullable();
            $table->double('incentive_amount_T1')->nullable();
            $table->double('shared_quote_percentage_T2')->nullable();
            $table->double('shared_quote_amount_T2')->nullable();
            $table->double('closed_ratio_T2')->nullable();
            $table->double('profit_margin_T2')->nullable();
            $table->double('effort_T2')->nullable();
            $table->string('perform_look_T2')->nullable();
            $table->double('rating_T2')->nullable();
            $table->double('incentive_percentage_T2')->nullable();
            $table->double('incentive_amount_T2')->nullable();
            $table->foreign('rfq_id')->references('id')->on('rfqs')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('sales_achievements');
    }
};
