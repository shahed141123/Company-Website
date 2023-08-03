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
        Schema::create('knowledge', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['sales', 'technical'])->nullable();
            $table->string('category_id')->nullable()->comment('multi_id');
            $table->string('industry_id')->nullable()->comment('multi_id');
            $table->string('brand_id')->nullable()->comment('multi_id');
            $table->string('brochure')->nullable()->comment('file:pdf');
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
        Schema::dropIfExists('knowledge');
    }
};
