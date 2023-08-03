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
        Schema::create('admin_menu_builders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('module_id')->nullable();
            $table->unsignedBigInteger('parent__id')->nullable();
            $table->string('name')->nullable();
            $table->string('url')->nullable();
            $table->string('icon')->nullable();
            $table->enum('is_module', ['0', '1'])->nullable()->default('0');
            $table->enum('is_parent', ['0', '1'])->nullable()->default('0');
            $table->string('route_name')->nullable();
            $table->string('permission_name')->nullable();
            $table->enum('status', ['active', 'inactive'])->nullable()->default('active');
            $table->foreign('module_id')->references('id')->on('admin_menu_builders')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('parent__id')->references('id')->on('admin_menu_builders')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('admin_menu_builders');
    }
};
