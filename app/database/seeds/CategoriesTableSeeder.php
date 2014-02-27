<?php

class CategoriesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('categories')->truncate();

		$categories = array(
                    array('name' => 'Category One', 'description'=>'Test category...'),
                    array('name' => 'Category Two', 'description'=>'Test category...'),
		);

		// Uncomment the below to run the seeder
		DB::table('categories')->insert($categories);
	}

}
