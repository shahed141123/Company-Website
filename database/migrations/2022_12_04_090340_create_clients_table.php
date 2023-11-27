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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username')->unique()->nullable();
            $table->string('email')->unique();
            $table->string('client_id')->unique()->nullable();
            $table->text('about')->nullable();
            $table->string('photo')->nullable();
            $table->string('support_tier')->nullable();
            $table->text('support_tier_description')->nullable();
            $table->string('phone')->nullable();
            $table->text('address')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('postal')->nullable();
            $table->string('last_seen')->nullable();
            $table->string('company_name')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('inactive');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            $table->enum('client_type', ['online', 'corporate'])->nullable();
            $table->string('sector')->nullable();
            $table->unsignedBigInteger('sub_sector')->nullable();
            $table->string('area')->nullable();
            $table->string('contact_person')->nullable();
            $table->string('designation')->nullable();
            $table->string('department')->nullable();
            $table->string('official_phone')->nullable();
            $table->string('client_status')->nullable();
            $table->string('tier')->nullable();
            $table->string('comments')->nullable();
            $table->foreign('sub_sector')->references('id')->on('industries')->onUpdate('cascade');
            $table->rememberToken();
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
        Schema::dropIfExists('clients');
    }
};
