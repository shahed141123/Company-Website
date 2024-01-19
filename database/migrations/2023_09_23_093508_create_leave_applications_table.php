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
        Schema::create('leave_applications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id')->nullable();
            $table->unsignedBigInteger('supervisor_id')->nullable();
            $table->unsignedBigInteger('substitute_id')->nullable();
            $table->string('name')->nullable();
            $table->string('type_of_leave')->nullable();
            $table->string('designation')->nullable();
            $table->string('company')->nullable();
            $table->date('leave_start_date')->nullable();
            $table->date('leave_end_date')->nullable();
            $table->integer('total_days')->nullable();
            $table->string('job_status')->nullable();
            $table->date('reporting_on')->nullable();
            $table->text('leave_explanation')->nullable();
            $table->string('substitute_during_leave')->nullable();
            $table->text('leave_address')->nullable();
            $table->string('is_between_holidays')->nullable();
            $table->string('leave_contact_no')->nullable();
            $table->string('included_open_saturday')->nullable();
            $table->string('applicant_signature')->comment('file')->nullable();

            // Official Use Columns
            $table->string('leave_position')->nullable();
            $table->integer('casual_leave_due_as_on')->default('0')->nullable();  //New
            $table->integer('casual_leave_availed')->default('0')->nullable();  //New
            $table->integer('casual_balance_due')->default('0')->nullable();  //New
            $table->integer('earned_leave_due_as_on')->default('0')->nullable();  //New
            $table->integer('earned_leave_availed')->default('0')->nullable();  //New
            $table->integer('earned_balance_due')->default('0')->nullable();  //New
            $table->integer('medical_leave_due_as_on')->default('0')->nullable();  //New
            $table->integer('medical_leave_availed')->default('0')->nullable();  //New
            $table->integer('medical_balance_due')->default('0')->nullable();  //New

            $table->string('substitute_signature')->nullable()->comment('file')->nullable();
            $table->string('supervisor_signature')->nullable()->comment('file')->nullable();
            $table->string('hr_signature')->nullable()->comment('file')->nullable();
            $table->string('ceo_signature')->nullable()->comment('file')->nullable();

            $table->string('substitute_note')->nullable()->comment('file')->nullable();
            $table->string('supervisor_note')->nullable()->comment('file')->nullable();
            $table->string('hr_note')->nullable()->comment('file')->nullable();
            $table->string('ceo_note')->nullable()->comment('file')->nullable();

            $table->enum('substitute_action', ['approved', 'rejected'])->nullable();
            $table->enum('supervisor_action', ['approved', 'rejected'])->nullable();
            $table->enum('hr_action', ['approved', 'rejected'])->nullable();
            $table->enum('ceo_action', ['approved', 'rejected'])->nullable();

            $table->string('application_status')->nullable();
            $table->timestamps();

            // Foreign Key
            $table->foreign('employee_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leave_applications');
    }
};
