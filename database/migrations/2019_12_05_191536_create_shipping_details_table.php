<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShippingDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipping_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('shipping_methods_id');
            $table->string('address');
            $table->string('city');
            $table->string('postal_code');
            $table->string('status');
            $table->string('notes')->nullable();
            $table->timestamps();

            
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            
            
            $table->foreign('order_id')
                ->references('id')
                ->on('orders')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('shipping_methods_id')
                ->references('id')
                ->on('shipping_methods')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shipping_details');
    }
}
