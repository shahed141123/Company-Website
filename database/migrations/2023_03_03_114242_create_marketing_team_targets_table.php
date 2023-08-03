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
        Schema::create('marketing_team_targets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('marketing_manager_id')->nullable();
            $table->unsignedBigInteger('country_id')->nullable();
            $table->string('month')->nullable();
            $table->year('year')->nullable();
            $table->string('product_id')->nullable()->comment('multi_id');
            $table->string('client_id')->nullable()->comment('multi_id');
            $table->string('industry_id')->nullable()->comment('multi_id');
            $table->string('solution_id')->nullable()->comment('multi_id');
            $table->string('email')->nullable();
            $table->string('social')->nullable();
            $table->string('call')->nullable();
            $table->string('press')->nullable();
            $table->string('presentaion')->nullable();
            $table->string('boost')->nullable();
            $table->string('meet')->nullable();
            $table->string('blog')->nullable();
            $table->string('follow_up_meet')->nullable();
            $table->string('negotiation')->nullable();
            $table->string('deal_closeing')->nullable();
            $table->double('work_order')->nullable();
            $table->foreign('marketing_manager_id')->references('id')->on('users')->onUpdate('cascade');
            $table->foreign('country_id')->references('id')->on('countries')->onUpdate('cascade');
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
        Schema::dropIfExists('marketing_team_targets');
    }
};
