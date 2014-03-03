<?php

class VendorsTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        // DB::table('vendors')->truncate();

        $vendors = array(
            array(
                'name' => 'Apple',
                'description' => 'Description about vendor',
                'slug' => 'apple',
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d')
            ),
            array(
                'name' => 'LG Mobile',
                'description' => 'Description about vendor',
                'slug' => 'lg-mobile',
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d')
            ),
        );

        // Uncomment the below to run the seeder
        DB::table('vendors')->insert($vendors);
    }

}
