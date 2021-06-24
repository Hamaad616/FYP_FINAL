<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SalesVendor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_vendor', function (Blueprint $table){
            $table->BigIncrements('id');
            $table->unsignedBigInteger('sale_id')->unsigned()->nullable();
            $table->unsignedBigInteger('vendor_id')->unsigned()->nullable();

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
        Schema::dropIfExists('sales_vendor');
    }
}
