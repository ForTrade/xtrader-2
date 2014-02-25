<?php

class SentryUserGroupSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users_groups')->delete();

		$userUser = Sentry::getUserProvider()->findByLogin('user@user.com');
                $editorUser = Sentry::getUserProvider()->findByLogin('editor@editor.com');
		$adminUser = Sentry::getUserProvider()->findByLogin('admin@admin.com');

		$userGroup = Sentry::getGroupProvider()->findByName('Users');
                $editorGroup = Sentry::getGroupProvider()->findByName('Editors');
		$adminGroup = Sentry::getGroupProvider()->findByName('Admins');

	    // Assign the groups to the users
	    $userUser->addGroup($userGroup);
            
            $editorUser->addGroup($userGroup);
            $editorUser->addGroup($editorGroup);
            
	    $adminUser->addGroup($userGroup);
            $adminUser->addGroup($editorGroup);
	    $adminUser->addGroup($adminGroup);
            
	}

}