<?php

class UsersTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        // DB::table('vendors')->truncate();

        $users = array(
            array(
                'email' => 'admin@admin.com',
                'password' => Hash::make('admin'),
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d')
            ),
            array(
                'email' => 'user@user.com',
                'password' => Hash::make('user'),
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d')
            ),
        );

        // Uncomment the below to run the seeder
        DB::table('users')->insert($users);
    }

}
