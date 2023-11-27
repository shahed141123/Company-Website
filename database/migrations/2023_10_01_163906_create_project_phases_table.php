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
        Schema::create('project_phases', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_id')->nullable();
            $table->unsignedBigInteger('phase')->nullable();
            $table->enum('type', ['development', 'deployment',])->default('development');
            $table->string('phase_title', 225)->nullable();
            $table->string('phase_id', 190)->nullable();
            $table->json('team_id')->nullable();
            // $table->boolean('implementation_support')->default(false);
            // $table->string('implementation_support_id', 150)->nullable();
            // $table->mediumText('scope_implementation_support')->nullable();
            // $table->boolean('amc_support')->default(false);
            // $table->string('amc_support_id', 150)->nullable();
            // $table->mediumText('scope_amc_support')->nullable();
            // $table->boolean('other_support')->default(false);
            // $table->string('other_support_id', 150)->nullable();
            // $table->mediumText('scope_other_support')->nullable();
            $table->timestamps();
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_phases');
    }
};
