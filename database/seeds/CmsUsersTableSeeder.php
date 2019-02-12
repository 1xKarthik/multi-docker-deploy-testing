<?php

use Illuminate\Database\Seeder;

class CmsUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cms_users')->delete();
        
        \DB::table('cms_users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Super Admin',
                'photo' => 'uploads/1/2019-01/cv_dp.jpg',
                'email' => 'admin@crudbooster.com',
                'password' => '$2y$10$f3OzXf.CDmIXwwUu6KQSh.3YNF6b2Yeusq/fZY96VRsNoTGKMUWwi',
                'id_cms_privileges' => 1,
                'created_at' => '2018-09-17 11:28:29',
                'updated_at' => '2019-01-05 14:23:01',
                'status' => 'Active',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Karthik',
                'photo' => 'uploads/1/2019-01/dp.jpg',
                'email' => 'karthik.girraj@gmail.com',
                'password' => '$2y$10$6W3/opmxuxr6N0oXH4/IIOc3HrvpXqhOJSj5JFRnxvbQUU1scMWvG',
                'id_cms_privileges' => 1,
                'created_at' => '2019-01-05 14:24:23',
                'updated_at' => NULL,
                'status' => NULL,
            ),
        ));
        
        
    }
}