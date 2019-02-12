<?php

use Illuminate\Database\Seeder;

class CmsMenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cms_menus')->delete();
        
        \DB::table('cms_menus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'About',
                'type' => 'Route',
                'path' => 'AdminAboutControllerGetIndex',
                'color' => NULL,
                'icon' => 'fa fa-headphones',
                'parent_id' => 0,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => 1,
                'sorting' => 1,
                'created_at' => '2019-01-06 07:14:30',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Intro Content',
                'type' => 'Route',
                'path' => 'AdminIntroContentControllerGetIndex',
                'color' => NULL,
                'icon' => 'fa fa-bookmark',
                'parent_id' => 0,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => 1,
                'sorting' => 2,
                'created_at' => '2019-01-06 11:17:34',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}