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
        Schema::create('hr_policies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('policy_category_id')->nullable();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->date('effective_date')->nullable();
            $table->date('expiration_date')->nullable();
            $table->enum('status', ['active', 'inactive', 'archived'])->default('active');
            $table->string('version')->nullable();
            $table->timestamps();
            $table->foreign('policy_category_id')->references('id')->on('policy_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hr_policies');
    }
};
