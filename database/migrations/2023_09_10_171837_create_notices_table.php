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
        Schema::create('notices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->nullable()->constrained('users')->cascadeOnDelete();
            $table->string('title')->nullable();
            $table->string('slug')->unique();
            $table->text('content')->nullable();
            $table->date('publish_date')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->date('expiry_date')->nullable();
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();
            $table->string('department')->nullable();
            $table->string('notice_category')->nullable();
            $table->string('notice_type')->nullable();
            $table->enum('achievement_status', ['achieved', 'not_achieved'])->nullable();
            $table->enum('status', ['published', 'unpublished'])->nullable()->default('published');
            $table->string('attachment_path')->nullable();
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
        Schema::dropIfExists('notices');
    }
};
