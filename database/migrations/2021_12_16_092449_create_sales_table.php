<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('received_at');
            $table->unsignedSmallInteger('store_id');
            $table->dateTime('recorded_at');
            $table->unsignedSmallInteger('product_id');
            $table->unsignedSmallInteger('price');
            $table->unsignedSmallInteger('quantity');
            $table->unsignedSmallInteger('store_sum');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
