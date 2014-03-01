<?php

class ProductsTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        //DB::table('products')->truncate();

        $products = array(
            array(
                'sku' => '938474837398',
                'name' => 'iPhone 6',
                'description' => 'Test it',
                'type' => 'Phones',
                'category_id' => 1,
                'price' => 678.000,
                'stock_qty' => 5,
                'available_qty' => 5,
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d')
            ),
            array(
                'sku' => '545855454567',
                'name' => 'Nexus 5',
                'description' => 'Test it',
                'type' => 'Phones',
                'category_id' => 2,
                'price' => 350.000,
                'stock_qty' => 10,
                'available_qty' => 10,
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d')
            )
        );

        // Uncomment the below to run the seeder
        DB::table('products')->insert($products);
    }

}
