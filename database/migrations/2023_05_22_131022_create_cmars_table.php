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
        Schema::create('cmars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('marketing_manager_id')->nullable();
            $table->unsignedBigInteger('solution_id')->nullable();
            $table->unsignedBigInteger('product_id')->nullable();
            $table->year('year')->nullable();
            $table->enum('quarter', ['q1', 'q2', 'q3', 'q4'])->nullable();
            $table->string('month')->nullable();
            $table->enum('week', ['w1', 'w2', 'w3', 'w4', 'w5'])->nullable();
            $table->string('target')->nullable();
            $table->string('workorder')->nullable();
            $table->string('revenue')->nullable();
            $table->text('description')->nullable();
            $table->string('sector_smb')->nullable();
            $table->string('sector_epg')->nullable();
            $table->string('sector_fmg')->nullable();
            $table->string('sector_govt')->nullable();
            $table->string('sector_edu')->nullable();
            $table->string('email')->nullable();
            $table->string('email_links')->nullable();
            $table->string('social')->nullable();
            $table->string('social_links')->nullable();
            $table->string('call')->nullable();
            $table->string('call_links')->nullable();
            $table->string('press')->nullable();
            $table->string('press_links')->nullable();
            $table->string('presentation')->nullable();
            $table->string('presentation_links')->nullable();
            $table->string('boost')->nullable();
            $table->string('boost_links')->nullable();
            $table->string('blog')->nullable();
            $table->string('blog_links')->nullable();
            $table->string('negotiation')->nullable();
            $table->string('negotiation_links')->nullable();
            $table->string('deal_closing')->nullable();
            $table->string('deal_closing_links')->nullable();
            $table->string('followup')->nullable();
            $table->string('followup_links')->nullable();
            $table->string('quote')->nullable();
            $table->string('quote_links')->nullable();
            $table->foreign('marketing_manager_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('solution_id')->references('id')->on('solution_details')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('cmars');
    }
};
