<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('products');
        
        Schema::create('products', function(Blueprint $table) {
                    $table->increments('id');
                    $table->string('sku');
                    $table->string('name');
                    $table->string('description');
                    $table->string('type');
                    $table->string('category_id');
                    $table->double('price', 10, 3);
                    $table->integer('stock_qty')->default(0);
                    $table->integer('available_qty')->default(0);
                    $table->boolean('featured')->default(0);
                    $table->boolean('enabled')->default(0);
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
        Schema::drop('products');
    }

}
