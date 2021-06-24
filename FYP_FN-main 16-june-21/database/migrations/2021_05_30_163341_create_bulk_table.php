<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBulkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bulk', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')
                ->on('users')->onUpdate('cascade')->onDelete('set null');

            $table->integer('product_id')->unsigned()->nullable();
            $table->foreign('product_id')->references('id')
                ->on('products')->onUpdate('cascade')->onDelete('set null');

            $table->string('product_name')->nullable();
            $table->integer('quantity')->default(0);
            $table->integer('status')->default(0);
            $table->decimal('desired_amount')->default(0);
            $table->string('country')->nullable();
            $table->integer('time_limit')->nullable();
            $table->string('email')->nullable();
            $table->string('message')->nullable();

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
        Schema::dropIfExists('bulk');
    }
}
