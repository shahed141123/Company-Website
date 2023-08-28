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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('ref_code')->unique()->nullable();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('sku_code')->nullable();
            $table->string('mf_code')->nullable();
            $table->string('product_code')->nullable();
            $table->string('tags')->nullable();
            $table->string('size')->nullable();
            $table->string('color')->nullable();
            $table->longText('short_desc')->nullable();
            $table->longText('overview')->nullable();
            $table->longText('specification')->nullable();
            $table->longText('accessories')->nullable();
            $table->longText('warranty')->nullable();
            $table->string('thumbnail')->nullable();
            $table->integer('qty')->default(1)->nullable();
            //$table->enum('condition',['default','new','hot'])->default('default');
            // $table->enum('stock',['unlimited','limited','available','stock_out'])->default('available')->nullable();
            $table->string('stock')->nullable();
            $table->double('price')->nullable();
            $table->double('sas_price')->nullable();
            $table->double('discount')->nullable();
            $table->string('deal')->nullable();
            $table->string('industry')->nullable();
            $table->string('solution')->nullable();
            $table->enum('refurbished',['0','1'])->default('0')->nullable();
            $table->enum('price_status',['rfq','price','offer_price','starting_price'])->default('price');
            $table->enum('rfq',['0','1'])->default('0')->nullable();
            $table->string('product_type');
            $table->unsignedBigInteger('cat_id')->nullable();
            $table->unsignedBigInteger('sub_cat_id')->nullable();
            $table->unsignedBigInteger('sub_sub_cat_id')->nullable();
            $table->unsignedBigInteger('sub_sub_sub_cat_id')->nullable();
            $table->unsignedBigInteger('brand_id')->nullable();
            $table->enum('status',['active','inactive'])->default('active');

            $table->enum('product_status', ['sourcing', 'product'])->default('sourcing');
            $table->double('source_one_price')->nullable();
            $table->double('source_two_price')->nullable();
            $table->string('source_one_name')->nullable();
            $table->string('source_two_name')->nullable();
            $table->string('source_one_link')->nullable();
            $table->string('source_two_link')->nullable();

            $table->double('competetor_one_price')->nullable();
            $table->double('competetor_two_price')->nullable();
            $table->string('competetor_one_name')->nullable();
            $table->string('competetor_two_name')->nullable();
            $table->string('competetor_one_link')->nullable();
            $table->string('competetor_two_link')->nullable();
            $table->enum('source_one_approval', ['0', '1'])->default(0)->nullable();
            $table->enum('source_two_approval', ['0', '1'])->default(0)->nullable();
            $table->string('notification_days')->nullable();
            $table->date('create_date')->nullable();
            $table->enum('solid_source', ['yes', 'no'])->default('no')->nullable();
            $table->enum('direct_principal', ['yes', 'no'])->default('no')->nullable();
            $table->enum('agreement', ['yes', 'no'])->default('no')->nullable();
            $table->string('source_type')->nullable();
            $table->text('source_contact')->nullable();
            $table->string('action_status')->nullable();
            $table->string('added_by')->nullable();
            $table->double('source_one_estimate_time')->nullable();
            $table->double('source_one_principal_time')->nullable();
            $table->double('source_one_shipping_time')->nullable();
            $table->string('source_one_location')->nullable();
            $table->string('source_one_country')->nullable();
            $table->double('source_two_estimate_time')->nullable();
            $table->double('source_two_principal_time')->nullable();
            $table->double('source_two_shipping_time')->nullable();
            $table->string('source_two_location')->nullable();
            $table->string('source_two_country')->nullable();
            $table->text('rejection_note')->nullable();

            $table->timestamps();

            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('SET NULL');
            $table->foreign('cat_id')->references('id')->on('categories')->onDelete('SET NULL');
            $table->foreign('sub_cat_id')->references('id')->on('sub_categories')->onDelete('SET NULL');
            $table->foreign('sub_sub_cat_id')->references('id')->on('sub_sub_categories')->onDelete('SET NULL');
            $table->foreign('sub_sub_sub_cat_id')->references('id')->on('sub_sub_sub_categories')->onDelete('SET NULL');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
