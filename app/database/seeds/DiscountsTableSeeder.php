<?php

class DiscountsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('products')->truncate();

		$discounts = array(
                    array('name' => 'Sconto 5%', 'type'=>'%', 'value'=>5.00),
                    array('name' => 'Sconto 15%', 'type'=>'%', 'value'=>15.00),
		);

		// Uncomment the below to run the seeder
		DB::table('discounts')->insert($discounts);
	}

}
