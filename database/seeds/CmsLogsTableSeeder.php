<?php

use Illuminate\Database\Seeder;

class CmsLogsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cms_logs')->delete();
        
        \DB::table('cms_logs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.16 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/login',
                'description' => 'admin@crudbooster.com login with IP Address 127.0.0.1',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2018-09-17 11:28:48',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.16 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/login',
                'description' => 'admin@crudbooster.com login with IP Address 127.0.0.1',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2018-09-19 13:12:24',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.106 YaBrowser/18.9.1.464 (beta) Yowser/2.5 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/login',
                'description' => 'admin@crudbooster.com login with IP Address 127.0.0.1',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2018-09-20 05:36:22',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.106 YaBrowser/18.9.1.464 (beta) Yowser/2.5 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/login',
                'description' => 'admin@crudbooster.com login with IP Address 127.0.0.1',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2018-09-20 08:32:19',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:65.0) Gecko/20100101 Firefox/65.0',
                'url' => 'http://127.0.0.1:8000/admin/login',
                'description' => 'admin@crudbooster.com login with IP Address 127.0.0.1',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2019-01-04 06:45:46',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:65.0) Gecko/20100101 Firefox/65.0',
                'url' => 'http://127.0.0.1:8000/admin/module_generator/delete/13',
                'description' => 'Delete data test at Module Generator',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2019-01-04 06:46:25',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:65.0) Gecko/20100101 Firefox/65.0',
                'url' => 'http://127.0.0.1:8000/admin/module_generator/delete/12',
                'description' => 'Delete data users at Module Generator',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2019-01-04 06:46:51',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:65.0) Gecko/20100101 Firefox/65.0',
                'url' => 'http://resume.test/admin/login',
                'description' => 'admin@crudbooster.com login with IP Address 192.168.10.1',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2019-01-05 14:21:28',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:65.0) Gecko/20100101 Firefox/65.0',
                'url' => 'http://resume.test/admin/users/edit-save/1',
                'description' => 'Update data Super Admin at Users Management',
                'details' => '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>photo</td><td></td><td>uploads/1/2019-01/cv_dp.jpg</td></tr><tr><td>password</td><td>$2y$10$rSvmteSsLFgb.Z4d4vLV/e/aevr2SRh76MH7qsxYArxlb7NdsZpNK</td><td>$2y$10$f3OzXf.CDmIXwwUu6KQSh.3YNF6b2Yeusq/fZY96VRsNoTGKMUWwi</td></tr><tr><td>id_cms_privileges</td><td>1</td><td></td></tr><tr><td>status</td><td>Active</td><td></td></tr></tbody></table>',
                'id_cms_users' => 1,
                'created_at' => '2019-01-05 14:23:01',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:65.0) Gecko/20100101 Firefox/65.0',
                'url' => 'http://resume.test/admin/users/add-save',
                'description' => 'Add New Data Karthik at Users Management',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2019-01-05 14:24:23',
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:65.0) Gecko/20100101 Firefox/65.0',
                'url' => 'http://resume.test/admin/logout',
                'description' => 'admin@crudbooster.com logout',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2019-01-05 14:27:54',
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:65.0) Gecko/20100101 Firefox/65.0',
                'url' => 'http://resume.test/admin/login',
                'description' => 'karthik.girraj@gmail.com login with IP Address 192.168.10.1',
                'details' => '',
                'id_cms_users' => 2,
                'created_at' => '2019-01-05 14:28:05',
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:65.0) Gecko/20100101 Firefox/65.0',
                'url' => 'http://resume.test/admin/login',
                'description' => 'karthik.girraj@gmail.com login with IP Address 192.168.10.1',
                'details' => '',
                'id_cms_users' => 2,
                'created_at' => '2019-01-05 17:46:02',
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:65.0) Gecko/20100101 Firefox/65.0',
                'url' => 'http://resume.test/admin/login',
                'description' => 'karthik.girraj@gmail.com login with IP Address 192.168.10.1',
                'details' => '',
                'id_cms_users' => 2,
                'created_at' => '2019-01-06 07:01:01',
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:65.0) Gecko/20100101 Firefox/65.0',
                'url' => 'http://resume.test/admin/about/add-save',
                'description' => 'Add New Data KARTHIK GIRRAJU at About',
                'details' => '',
                'id_cms_users' => 2,
                'created_at' => '2019-01-06 07:17:03',
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:65.0) Gecko/20100101 Firefox/65.0',
                'url' => 'http://resume.test/admin/about/edit-save/1',
                'description' => 'Update data KARTHIK GIRRAJU at About',
                'details' => '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>intro</td><td></td><td>Graduated Master of Science in Software Engineering from Vellore Institute of Technology, Tamil Nadu.|Proficient in all aspects of Front-End and Back-End development.|Good page layout and design skills, multitasking and handling projects from concept to final deliverable.</td></tr></tbody></table>',
                'id_cms_users' => 2,
                'created_at' => '2019-01-06 07:19:56',
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:65.0) Gecko/20100101 Firefox/65.0',
                'url' => 'http://resume.test/admin/about/add-save',
                'description' => 'Add New Data KARTHIK GIRRAJU at About',
                'details' => '',
                'id_cms_users' => 2,
                'created_at' => '2019-01-06 10:46:54',
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:65.0) Gecko/20100101 Firefox/65.0',
                'url' => 'http://resume.test/admin/intro_content/add-save',
                'description' => 'Add New Data Graduated Master of Science in Software Engineering from Vellore Institute of Technology, Tamil Nadu. at Intro Content',
                'details' => '',
                'id_cms_users' => 2,
                'created_at' => '2019-01-06 11:18:39',
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:65.0) Gecko/20100101 Firefox/65.0',
                'url' => 'http://resume.test/admin/about/edit-save/1',
                'description' => 'Update data KARTHIK GIRRAJU at About',
                'details' => '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>intro_id</td><td></td><td></td></tr><tr><td>deleted_at</td><td></td><td></td></tr></tbody></table>',
                'id_cms_users' => 2,
                'created_at' => '2019-01-06 11:44:43',
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3662.0 Safari/537.36',
                'url' => 'http://resume.test/admin/login',
                'description' => 'karthik.girraj@gmail.com login with IP Address 192.168.10.1',
                'details' => '',
                'id_cms_users' => 2,
                'created_at' => '2019-01-06 11:45:30',
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3662.0 Safari/537.36',
                'url' => 'http://resume.test/admin/about/delete/1',
                'description' => 'Delete data KARTHIK GIRRAJU at About',
                'details' => '',
                'id_cms_users' => 2,
                'created_at' => '2019-01-06 11:45:55',
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3662.0 Safari/537.36',
                'url' => 'http://resume.test/admin/about/add-save',
                'description' => 'Add New Data Mary Hebert at About',
                'details' => '',
                'id_cms_users' => 2,
                'created_at' => '2019-01-06 11:46:20',
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3662.0 Safari/537.36',
                'url' => 'http://resume.test/admin/about/edit-save/2',
                'description' => 'Update data Mary Hebert at About',
                'details' => '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>intro_id</td><td></td><td></td></tr><tr><td>deleted_at</td><td></td><td></td></tr></tbody></table>',
                'id_cms_users' => 2,
                'created_at' => '2019-01-06 11:47:26',
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3662.0 Safari/537.36',
                'url' => 'http://resume.test/admin/about/add-save',
                'description' => 'Add New Data Malcolm Bradshaw at About',
                'details' => '',
                'id_cms_users' => 2,
                'created_at' => '2019-01-06 12:00:55',
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3662.0 Safari/537.36',
                'url' => 'http://resume.test/admin/about/add-save',
                'description' => 'Add New Data Bruno Berry at About',
                'details' => '',
                'id_cms_users' => 2,
                'created_at' => '2019-01-06 12:15:52',
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3662.0 Safari/537.36',
                'url' => 'http://resume.test/admin/about/edit-save/2',
                'description' => 'Update data Bruno Berry at About',
                'details' => '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>deleted_at</td><td></td><td></td></tr></tbody></table>',
                'id_cms_users' => 2,
                'created_at' => '2019-01-06 12:18:02',
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3662.0 Safari/537.36',
                'url' => 'http://resume.test/admin/about/add-save',
                'description' => 'Add New Data Kiayada Vincent at About',
                'details' => '',
                'id_cms_users' => 2,
                'created_at' => '2019-01-06 12:18:32',
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3662.0 Safari/537.36',
                'url' => 'http://resume.test/admin/about/add-save',
                'description' => 'Add New Data karthik girraju at About',
                'details' => '',
                'id_cms_users' => 2,
                'created_at' => '2019-01-06 12:27:32',
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3662.0 Safari/537.36',
                'url' => 'http://resume.test/admin/logout',
                'description' => 'karthik.girraj@gmail.com logout',
                'details' => '',
                'id_cms_users' => 2,
                'created_at' => '2019-01-06 12:43:38',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}