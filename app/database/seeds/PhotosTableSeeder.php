<?php

class PhotosTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        // DB::table('photos')->truncate();

        $photos = array(
            array(
                'filename' => 'product-one-a.jpg',
                'product_id' => 1,
                'primary' => 1,
                'enabled' => 1,
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d')
            ),
            array(
                'filename' => 'product-one-b.jpg',
                'product_id' => 1,
                'primary' => 0,
                'enabled' => 1,
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d')
            ),
            array(
                'filename' => 'product-two-a.jpg',
                'product_id' => 2,
                'primary' => 1,
                'enabled' => 1,
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d')
            ),
        );

        // Uncomment the below to run the seeder
        DB::table('photos')->insert($photos);
    }

}
