<?php

use Illuminate\Database\Seeder;

class AboutTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('about')->delete();
        
        \DB::table('about')->insert(array (
            0 => 
            array (
                'id' => 4,
                'full_name' => 'karthik girraju',
                'title' => 'M.S.S.E Graduate',
                'linkedin_url' => 'https://in.linkedin.com/in/karthikgirraju',
                'github_url' => 'https://github.com/karthikgirraj',
                'created_at' => '2019-01-06 12:27:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}