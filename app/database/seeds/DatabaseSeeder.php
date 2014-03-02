<?php

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        //$this->call('UserTableSeeder');

        $this->call('ProductsTableSeeder');
        $this->call('DiscountsTableSeeder');
        $this->call('DiscountablesTableSeeder');
        $this->call('CategoriesTableSeeder');
        $this->call('AttributesTableSeeder');

        //$this->call('SentryGroupSeeder');
        //$this->call('SentryUserSeeder');
        //$this->call('SentryUserGroupSeeder');
    	$this->call('PhotosTableSeeder');
	}

}