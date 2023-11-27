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
        Schema::create('job_registrations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id')->nullable();
            $table->string('name');
            $table->string('email');
            $table->text('address')->nullable();
            $table->string('phone_number');
            $table->string('district')->nullable();
            $table->string('country')->nullable();
            $table->text('training_one_institution')->nullable();
            $table->text('training_one_topic')->nullable();
            $table->text('training_two_institution')->nullable();
            $table->text('training_two_topic')->nullable();
            $table->text('training_three_institution')->nullable();
            $table->text('training_three_topic')->nullable();
            $table->string('professional_company_name_one')->nullable();
            $table->string('professional_depertment_one')->nullable();
            $table->date('professional_start_date_one')->nullable();
            $table->date('professional_end_date_one')->nullable();
            $table->string('professional_company_name_two')->nullable();
            $table->string('professional_depertment_two')->nullable();
            $table->date('professional_start_date_two')->nullable();
            $table->date('professional_end_date_two')->nullable();
            $table->string('academic_institution_one')->nullable();
            $table->string('academic_degree_one')->nullable();
            $table->string('academic_passing_one')->nullable();
            $table->string('academic_result_one')->nullable();
            $table->string('academic_institution_two')->nullable();
            $table->string('academic_degree_two')->nullable();
            $table->string('academic_passing_two')->nullable();
            $table->string('academic_result_two')->nullable();
            $table->string('skill_one')->nullable();
            $table->string('skill_two')->nullable();
            $table->string('skill_three')->nullable();
            $table->string('skill_four')->nullable();
            $table->string('skill_five')->nullable();
            $table->string('skill_six')->nullable();
            $table->string('activity_one')->nullable();
            $table->string('activity_two')->nullable();
            $table->string('activity_three')->nullable();
            $table->string('activity_four')->nullable();
            $table->string('activity_five')->nullable();
            $table->string('activity_six')->nullable();
            $table->string('reference_name_one')->nullable();
            $table->text('reference_organisation_one')->nullable();
            $table->string('reference_email_one')->nullable();
            $table->string('reference_phone_one')->nullable();
            $table->string('reference_name_two')->nullable();
            $table->text('reference_organisation_two')->nullable();
            $table->string('reference_email_two')->nullable();
            $table->string('reference_phone_two')->nullable();
            $table->string('resume')->nullable();
            $table->string('linkedin')->nullable();
            $table->timestamps();
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade'); // assuming you have a users table from Laravel auth
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_registrations');
    }
};
