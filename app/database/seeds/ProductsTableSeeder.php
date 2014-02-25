<?php

class ProductsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('products')->truncate();

		$products = array(
                    array('name' => 'iPhone 6', 'description'=>'Test it'),
                    array('name' => 'Nexus 5', 'description'=>'Test it')
		);

		// Uncomment the below to run the seeder
		DB::table('products')->insert($products);
	}

}
