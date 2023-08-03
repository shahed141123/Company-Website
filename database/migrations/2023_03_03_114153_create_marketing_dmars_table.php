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
        Schema::create('marketing_dmars', function (Blueprint $table) {

            // ***********************activity
            // New Visit
            // New Call
            // New Email
            // Followup Visit
            // Followup Call
            // Followup Email
            // Followup Renewal
            // 1st Marketing Visit
            // 2nd Marketing Visit
            // 1st Marketing Call
            // 2nd Marketing Call

            // ***************************current_status
            // Potential
            // TOR Stage
            // RFQ Stage
            // PoC Stage
            // Presentation Stage
            // NO - Next Opportunity
            // Sold
            // Lost
            // No Result
            // Introduced
            // Less Potential
            // Initially Interested

            // *********************solution
            // Services
            // Training
            // System Integration
            // Hardware
            // Software


            $table->id();

            $table->unsignedBigInteger('marketing_manager_id')->nullable();
            $table->enum('status', ['missed', 'appointed', 'not_done', 'done'])->nullable();
            $table->string('area')->nullable();
            $table->enum('quarter', ['q1', 'q2', 'q3', 'q4'])->nullable();
            $table->string('month')->nullable();
            $table->enum('week', ['w1', 'w2', 'w3', 'w4', 'w5'])->nullable();
            $table->date('date')->nullable();
            $table->enum('client_type', ['new', 'existing', 'old', 'lost'])->nullable();
            $table->string('sector')->nullable()->comment('psc', 'mnc', 'edu', 'epg', 'smb');
            $table->string('company_name')->nullable();
            $table->string('activity')->nullable();
            $table->string('current_status')->nullable();
            $table->string('solution')->nullable();
            $table->string('product')->nullable();
            $table->string('phone')->nullable();
            $table->string('contact')->nullable();
            $table->string('comments_by_sales')->nullable();
            $table->string('comments_by_ceo')->nullable();
            $table->string('action_on_fail')->nullable();
            $table->foreign('marketing_manager_id')->references('id')->on('users')->onUpdate('cascade');

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
        Schema::dropIfExists('marketing_dmars');
    }
};
