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
        Schema::create('client_supports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_id')->nullable();
            $table->unsignedBigInteger('phase_id')->nullable();
            $table->unsignedBigInteger('client_id')->nullable();
            $table->string('support_type', 150)->nullable();
            $table->string('support_title', 225)->nullable();
            $table->string('slug')->unique()->nullable();
            $table->string('support_id', 190)->nullable();
            $table->mediumText('description')->nullable();
            $table->mediumText('scope_work')->nullable();
            $table->string('support_duration')->nullable();
            $table->string('support_tier')->nullable();
            $table->text('support_tier_description')->nullable();
            $table->string('order_id')->nullable();
            $table->string('support_hour')->nullable();
            $table->string('support_attachment')->nullable();
            $table->enum('status', ['pending', 'on_going', 'closed'])->default('pending');
            $table->text('status_description')->nullable();
            $table->string('review')->nullable();
            $table->text('review_description')->nullable();
            $table->json('team_id')->nullable();
            $table->timestamps();
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->foreign('phase_id')->references('id')->on('project_phases')->onDelete('cascade');
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_supports');
    }
};
