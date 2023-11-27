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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('name', 150)->nullable();
            $table->string('email', 150)->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('company', 20)->nullable();
            $table->string('address', 150)->nullable();
            $table->longText('message', 255)->nullable();
            $table->string('ip_address', 100)->nullable();
            $table->string('msg_type')->nullable();
            $table->string('msg_category')->nullable();
            $table->string('country')->nullable();
            $table->string('support_tier')->nullable();
            $table->text('support_tier_description')->nullable();
            $table->enum('status', ['pending', 'replied', 'on_going', 'closed'])->default('pending');
            $table->enum('type', ['support', 'contact'])->default('contact');
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
        Schema::dropIfExists('contacts');
    }
};
