<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('sku')->unique();
            $table->unsignedBigInteger('img')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('sub_category_id')->nullable();
            $table->string('product_details');
            $table->text('product_description');
            $table->integer('stock');
            $table->integer('stock_mergin')->default(1);
            $table->decimal('price',10,2);
            $table->decimal('present_price',10,2);
            $table->datetime('sale_started_at')->nullable();
            $table->datetime('sale_ended_at')->nullable();
            $table->timestamps();
            $table->integer('on_deals')->default(0);
            $table->integer('featured')->default(0);
            $table->integer('active')->default(0);
            
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('set null')
                ->onUpdate('cascade');
            
            $table->foreign('sub_category_id')
                ->references('id')
                ->on('sub_categories')
                ->onDelete('set null')
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
        Schema::dropIfExists('products');
    }
}
