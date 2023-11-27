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
        Schema::create('client_support_messages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('case_id')->nullable();
            $table->string('case_code')->unique()->nullable();
            $table->enum('sender_type',['admin','client'])->nullable();
            $table->unsignedBigInteger('sender_id')->nullable();
            $table->unsignedBigInteger('receiver_id')->nullable();
            $table->string('name')->nullable();
            $table->string('subject')->nullable();
            $table->json('cc')->nullable();
            $table->longText('message')->nullable();
            $table->string('attachment')->nullable();
            $table->foreign('case_id')->references('id')->on('support_cases')->onDelete('cascade'); // assuming you have a users table from Laravel auth
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
        Schema::dropIfExists('client_support_messages');
    }
};
