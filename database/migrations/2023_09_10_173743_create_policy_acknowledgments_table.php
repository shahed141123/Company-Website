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
        Schema::create('policy_acknowledgments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id')->nullable();
            $table->unsignedBigInteger('policy_id')->nullable();
            $table->string('sign')->nullable()->comment('file.It will automatically come from employee form.No need to add another image to database,just add the image name.');
            $table->enum('status', ['acknowledged', 'pending'])->default('pending');
            $table->timestamp('acknowledged_at')->nullable();
            $table->timestamps();

            $table->foreign('employee_id')->references('id')->on('users');
            $table->foreign('policy_id')->references('id')->on('hr_policies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('policy_acknowledgments');
    }
};
