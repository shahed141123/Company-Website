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
        Schema::create('job_applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('applicant_id')->nullable()->constrained('clients')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('job_id')->nullable()->constrained('job_posts')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('expected_salary', 50)->nullable();
            $table->string('current_salary', 50)->nullable();
            $table->date('available_from')->nullable();
            $table->longText('cover_letter')->nullable();
            $table->string('status', 150)->nullable();
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
        Schema::dropIfExists('job_applications');
    }
};
