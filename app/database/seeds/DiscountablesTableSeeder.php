<?php

class DiscountablesTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        //DB::table('products')->truncate();

        $discountables = array(
            array('discount_id' => 1, 'discountable_id' => 1, 'discountable_type' => 'Product'),
            array('discount_id' => 2, 'discountable_id' => 2, 'discountable_type' => 'Product'),
        );

        // Uncomment the below to run the seeder
        DB::table('discountables')->insert($discountables);
    }

}
