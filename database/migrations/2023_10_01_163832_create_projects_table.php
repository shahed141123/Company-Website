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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('sector_id')->nullable();
            $table->unsignedBigInteger('country_id')->nullable();
            $table->string('project_title', 225)->nullable();
            $table->string('slug')->unique()->nullable();
            $table->string('project_code')->unique()->nullable();
            $table->string('client_name')->nullable();
            $table->string('client_code')->unique()->nullable();
            $table->string('partner_name')->nullable();
            $table->string('project_duration')->nullable();
            $table->longText('project_description')->nullable();
            $table->unsignedBigInteger('team_member')->nullable();
            $table->string('order_id')->nullable();
            $table->mediumText('client_primary_contact')->nullable();
            $table->mediumText('partner_primary_contact')->nullable();
            $table->mediumText('client_secondary_contact')->nullable();
            $table->mediumText('partner_secondary_contact')->nullable();
            $table->date('order_date')->nullable();
            $table->date('create_time')->nullable();
            $table->date('closed_time')->nullable();
            $table->string('support_hour')->nullable();
            $table->string('contact_agreement')->nullable()->comment('file');
            $table->string('support_tier')->nullable();
            $table->enum('status', ['pending', 'on_going', 'completed', 'delaying', 'partially_deployed'])->default('pending');
            $table->text('status_description')->nullable();
            $table->json('team_id')->nullable();
            $table->timestamps();
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade'); // assuming you have a users table from Laravel auth
            $table->foreign('sector_id')->references('id')->on('industries')->onDelete('cascade'); // assuming you have a users table from Laravel auth
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade'); // assuming you have a users table from Laravel auth

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
};
