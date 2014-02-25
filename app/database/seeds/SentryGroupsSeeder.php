<?php

class SentryGroupSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('groups')->delete();

		Sentry::getGroupProvider()->create(array(
	        'name'        => 'Users',
	        'permissions' => array(
	            'admins' => 0,
                    'editors' => 0,
	            'users' => 1,
	        )));
                
                Sentry::getGroupProvider()->create(array(
	        'name'        => 'Editors',
	        'permissions' => array(
	            'admins' => 0,
                    'editors' => 1,
	            'users' => 1,
	        )));

		Sentry::getGroupProvider()->create(array(
	        'name'        => 'Admins',
	        'permissions' => array(
	            'admins' => 1,
                    'editors' => 1,
	            'users' => 1,
	        )));
	}

}