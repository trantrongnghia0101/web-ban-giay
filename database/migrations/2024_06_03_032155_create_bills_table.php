<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillsTable extends Migration
{
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->string('product_name');
            $table->string('product_image')->nullable();
            $table->integer('product_quantity');
            $table->string('billing_name');
            $table->string('billing_email');
            $table->string('billing_phone');
            $table->string('billing_address');
            $table->string('shipping_name')->nullable();
            $table->string('product_quantity')->nullable();
            $table->string('shipping_email')->nullable();
            $table->string('shipping_phone')->nullable();
            $table->string('shipping_address')->nullable();
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('products');

        });
    }

    public function down()
    {
        Schema::dropIfExists('bills');
    }
}