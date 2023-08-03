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
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('image')->nullable();
            $table->text('address')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->bigInteger('postal')->nullable();
            $table->enum('status',['active','inactive'])->nullable();
            $table->string('company_name')->nullable();
            $table->string('company_phone_number')->nullable();
            $table->string('company_logo')->nullable();
            $table->string('company_url')->nullable();
            $table->date('company_established_date')->nullable();
            $table->text('company_address')->nullable();
            $table->string('vat_number')->nullable();
            $table->string('tax_number')->nullable();
            $table->string('trade_license_number')->nullable();
            $table->string('tin_number')->nullable();
            $table->string('tin')->nullable()->comment('pdf');
            $table->string('bin_certificate')->nullable()->comment('pdf');
            $table->string('trade_license')->nullable()->comment('pdf');
            $table->string('audit_paper')->nullable()->comment('pdf');
            $table->string('industry_id_percentage')->nullable()->comment('multi_id');
            $table->string('product')->nullable()->comment('multi_id');
            $table->string('solution')->nullable()->comment('multi_id');
            $table->string('working_country')->nullable()->comment('multi_id');
            $table->string('yearly_revenue')->nullable()->comment('dropdown-select');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
        Schema::dropIfExists('partners');
    }
};
