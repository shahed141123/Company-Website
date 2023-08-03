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
       /* Creating a table called bankings with the following fields: */
        Schema::create('bankings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('region_id')->nullable();
            $table->unsignedBigInteger('country_id')->nullable();
            $table->string('month')->nullable();
            $table->date('date')->nullable();
            $table->year('fiscal_year')->nullable();
            $table->string('bank_name')->nullable();
            $table->double('deposit')->nullable();
            $table->double('withdraw')->nullable();
            $table->string('purpose')->nullable();
            $table->string('comments')->nullable();
            $table->string('notes')->nullable();
            $table->string('status')->nullable();

            $table->foreign('region_id')->references('id')->on('regions')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('country_id')->references('id')->on('countries')->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('bankings');
    }
};
