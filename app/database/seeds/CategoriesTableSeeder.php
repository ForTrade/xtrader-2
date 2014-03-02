<?php

class CategoriesTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        //DB::table('categories')->truncate();

        $categories = array(
            array(
                'name' => 'Category One', 
                'description' => 'Test category...',
                'slug' => 'category-one',
                'enabled' => 1,
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d')
                ),
            array(
                'name' => 'Category Two', 
                'description' => 'Test category...',
                'slug' => 'category-two',
                'enabled' => 1,
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d')
                ),
        );

        // Uncomment the below to run the seeder
        DB::table('categories')->insert($categories);
    }

}
