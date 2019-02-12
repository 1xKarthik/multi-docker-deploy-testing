<?php

use Illuminate\Database\Seeder;

class IntroContentTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('intro_content')->delete();
        
        \DB::table('intro_content')->insert(array (
            0 => 
            array (
                'id' => 1,
                'content' => 'Good page layout and design skills, multitasking and handling projects from concept to final deliverable.',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'content' => 'Proficient in all aspects of Front-End and Back-End development.',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'content' => 'Graduated Master of Science in Software Engineering from Vellore Institute of Technology, Tamil Nadu.',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}