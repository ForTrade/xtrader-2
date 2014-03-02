<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePhotosTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos', function(Blueprint $table) {
                    $table->increments('id');
                    $table->string('filename');
                    $table->integer('product_id')
                            ->foreign('product_id')->references('id')->on('products');
                    $table->boolean('primary')->default(0);
                    $table->boolean('enabled');
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
        Schema::drop('photos');
    }

}
