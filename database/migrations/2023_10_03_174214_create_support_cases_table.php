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
        Schema::create('support_cases', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('project_id')->nullable();
            $table->unsignedBigInteger('phase_id')->nullable();
            $table->unsignedBigInteger('support_id')->nullable();
            $table->string('code')->unique();
            $table->string('order_id')->nullable();
            $table->string('name', 150)->nullable();
            $table->string('subject')->nullable();
            $table->string('email', 150)->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('company', 20)->nullable();
            $table->mediumText('message')->nullable();
            $table->string('ip_address', 100)->nullable();
            $table->string('msg_category')->nullable();
            $table->string('msg_type')->nullable();
            $table->dateTime('create_time')->nullable();
            $table->dateTime('Closed_time')->nullable();
            $table->string('country')->nullable();
            $table->string('support_hour')->nullable();
            $table->string('attachment')->nullable();
            $table->string('support_tier')->nullable();
            $table->text('support_tier_description')->nullable();
            $table->enum('status', ['pending', 'replied', 'on_going', 'closed'])->default('pending');
            $table->json('team_id')->nullable();
            $table->timestamps();
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->foreign('phase_id')->references('id')->on('project_phases')->onDelete('cascade');
            $table->foreign('support_id')->references('id')->on('client_supports')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('support_cases');
    }
};
