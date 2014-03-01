<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDiscountablesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::dropIfExists('discountables');
        
        Schema::create('discountables', function(Blueprint $table) {
                    $table->integer('discount_id');
                    $table->integer('discountable_id');
                    $table->string('discountable_type');
                });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('discountables');
    }

}
