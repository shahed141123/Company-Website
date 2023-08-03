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
        Schema::create('tier_calculations', function (Blueprint $table) {
            $table->id();
            $table->double('point')->nullable();
            $table->double('tier')->nullable();
            $table->double('rebates')->nullable();
            $table->double('benifits')->nullable();
            $table->double('amount')->nullable();
            $table->double('value')->nullable();
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
        Schema::dropIfExists('tier_calculations');
    }
};
