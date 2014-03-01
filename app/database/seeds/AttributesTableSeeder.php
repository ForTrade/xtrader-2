<?php

class AttributesTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        //DB::table('attributes')->truncate();

        $attributes = array(
            array(
                'name' => 'Memory',
                'value' => '32 GB',
                'product_id' => 1,
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d')
            ),
            array(
                'name' => 'Color',
                'value' => 'White',
                'product_id' => 1,
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d')
            ),
            array(
                'name' => 'Color',
                'value' => 'Red',
                'product_id' => 2,
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d')
            ),
        );

        // Uncomment the below to run the seeder
        DB::table('attributes')->insert($attributes);
    }

}
