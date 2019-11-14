<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'created_at' => '2019-11-13 14:15:34',
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'updated_at' => '2019-11-13 14:15:34',
            ),
            1 => 
            array (
                'created_at' => '2019-11-13 14:15:34',
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'updated_at' => '2019-11-13 14:15:34',
            ),
            2 => 
            array (
                'created_at' => '2019-11-13 14:15:34',
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'updated_at' => '2019-11-13 14:15:34',
            ),
            3 => 
            array (
                'created_at' => '2019-11-13 14:15:34',
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'updated_at' => '2019-11-13 14:15:34',
            ),
            4 => 
            array (
                'created_at' => '2019-11-13 14:15:34',
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'updated_at' => '2019-11-13 14:15:34',
            ),
            5 => 
            array (
                'created_at' => '2019-11-13 14:15:34',
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'updated_at' => '2019-11-13 14:15:34',
            ),
            6 => 
            array (
                'created_at' => '2019-11-13 14:15:34',
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'updated_at' => '2019-11-13 14:15:34',
            ),
            7 => 
            array (
                'created_at' => '2019-11-13 14:15:34',
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'updated_at' => '2019-11-13 14:15:34',
            ),
            8 => 
            array (
                'created_at' => '2019-11-13 14:15:34',
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'updated_at' => '2019-11-13 14:15:34',
            ),
            9 => 
            array (
                'created_at' => '2019-11-13 14:15:34',
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'updated_at' => '2019-11-13 14:15:34',
            ),
            10 => 
            array (
                'created_at' => '2019-11-13 14:15:34',
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'updated_at' => '2019-11-13 14:15:34',
            ),
            11 => 
            array (
                'created_at' => '2019-11-13 14:15:34',
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'updated_at' => '2019-11-13 14:15:34',
            ),
            12 => 
            array (
                'created_at' => '2019-11-13 14:15:34',
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'updated_at' => '2019-11-13 14:15:34',
            ),
            13 => 
            array (
                'created_at' => '2019-11-13 14:15:34',
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'updated_at' => '2019-11-13 14:15:34',
            ),
            14 => 
            array (
                'created_at' => '2019-11-13 14:15:34',
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'updated_at' => '2019-11-13 14:15:34',
            ),
            15 => 
            array (
                'created_at' => '2019-11-13 14:15:34',
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'updated_at' => '2019-11-13 14:15:34',
            ),
            16 => 
            array (
                'created_at' => '2019-11-13 14:15:34',
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'updated_at' => '2019-11-13 14:15:34',
            ),
            17 => 
            array (
                'created_at' => '2019-11-13 14:15:34',
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'updated_at' => '2019-11-13 14:15:34',
            ),
            18 => 
            array (
                'created_at' => '2019-11-13 14:15:34',
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'updated_at' => '2019-11-13 14:15:34',
            ),
            19 => 
            array (
                'created_at' => '2019-11-13 14:15:34',
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'updated_at' => '2019-11-13 14:15:34',
            ),
            20 => 
            array (
                'created_at' => '2019-11-13 14:15:34',
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'updated_at' => '2019-11-13 14:15:34',
            ),
            21 => 
            array (
                'created_at' => '2019-11-13 14:15:34',
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'updated_at' => '2019-11-13 14:15:34',
            ),
            22 => 
            array (
                'created_at' => '2019-11-13 14:15:34',
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'updated_at' => '2019-11-13 14:15:34',
            ),
            23 => 
            array (
                'created_at' => '2019-11-13 14:15:34',
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'updated_at' => '2019-11-13 14:15:34',
            ),
            24 => 
            array (
                'created_at' => '2019-11-13 14:15:34',
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'updated_at' => '2019-11-13 14:15:34',
            ),
            25 => 
            array (
                'created_at' => '2019-11-13 14:15:34',
                'id' => 26,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'updated_at' => '2019-11-13 14:15:34',
            ),
            26 => 
            array (
                'created_at' => '2019-11-13 14:15:34',
                'id' => 27,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'updated_at' => '2019-11-13 14:15:34',
            ),
            27 => 
            array (
                'created_at' => '2019-11-13 14:15:34',
                'id' => 28,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'updated_at' => '2019-11-13 14:15:34',
            ),
            28 => 
            array (
                'created_at' => '2019-11-13 14:15:34',
                'id' => 29,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'updated_at' => '2019-11-13 14:15:34',
            ),
            29 => 
            array (
                'created_at' => '2019-11-13 14:15:34',
                'id' => 30,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'updated_at' => '2019-11-13 14:15:34',
            ),
            30 => 
            array (
                'created_at' => '2019-11-13 14:15:34',
                'id' => 31,
                'key' => 'browse_posts',
                'table_name' => 'posts',
                'updated_at' => '2019-11-13 14:15:34',
            ),
            31 => 
            array (
                'created_at' => '2019-11-13 14:15:34',
                'id' => 32,
                'key' => 'read_posts',
                'table_name' => 'posts',
                'updated_at' => '2019-11-13 14:15:34',
            ),
            32 => 
            array (
                'created_at' => '2019-11-13 14:15:34',
                'id' => 33,
                'key' => 'edit_posts',
                'table_name' => 'posts',
                'updated_at' => '2019-11-13 14:15:34',
            ),
            33 => 
            array (
                'created_at' => '2019-11-13 14:15:34',
                'id' => 34,
                'key' => 'add_posts',
                'table_name' => 'posts',
                'updated_at' => '2019-11-13 14:15:34',
            ),
            34 => 
            array (
                'created_at' => '2019-11-13 14:15:34',
                'id' => 35,
                'key' => 'delete_posts',
                'table_name' => 'posts',
                'updated_at' => '2019-11-13 14:15:34',
            ),
            35 => 
            array (
                'created_at' => '2019-11-13 14:15:34',
                'id' => 36,
                'key' => 'browse_pages',
                'table_name' => 'pages',
                'updated_at' => '2019-11-13 14:15:34',
            ),
            36 => 
            array (
                'created_at' => '2019-11-13 14:15:34',
                'id' => 37,
                'key' => 'read_pages',
                'table_name' => 'pages',
                'updated_at' => '2019-11-13 14:15:34',
            ),
            37 => 
            array (
                'created_at' => '2019-11-13 14:15:34',
                'id' => 38,
                'key' => 'edit_pages',
                'table_name' => 'pages',
                'updated_at' => '2019-11-13 14:15:34',
            ),
            38 => 
            array (
                'created_at' => '2019-11-13 14:15:34',
                'id' => 39,
                'key' => 'add_pages',
                'table_name' => 'pages',
                'updated_at' => '2019-11-13 14:15:34',
            ),
            39 => 
            array (
                'created_at' => '2019-11-13 14:15:34',
                'id' => 40,
                'key' => 'delete_pages',
                'table_name' => 'pages',
                'updated_at' => '2019-11-13 14:15:34',
            ),
            40 => 
            array (
                'created_at' => '2019-11-13 14:15:35',
                'id' => 41,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'updated_at' => '2019-11-13 14:15:35',
            ),
            41 => 
            array (
                'created_at' => '2019-11-13 15:13:27',
                'id' => 42,
                'key' => 'browse_blog_posts',
                'table_name' => NULL,
                'updated_at' => '2019-11-13 15:13:27',
            ),
            42 => 
            array (
                'created_at' => '2019-11-13 15:13:27',
                'id' => 43,
                'key' => 'read_blog_posts',
                'table_name' => NULL,
                'updated_at' => '2019-11-13 15:13:27',
            ),
            43 => 
            array (
                'created_at' => '2019-11-13 15:13:27',
                'id' => 44,
                'key' => 'edit_blog_posts',
                'table_name' => NULL,
                'updated_at' => '2019-11-13 15:13:27',
            ),
            44 => 
            array (
                'created_at' => '2019-11-13 15:13:27',
                'id' => 45,
                'key' => 'add_blog_posts',
                'table_name' => NULL,
                'updated_at' => '2019-11-13 15:13:27',
            ),
            45 => 
            array (
                'created_at' => '2019-11-13 15:13:27',
                'id' => 46,
                'key' => 'delete_blog_posts',
                'table_name' => NULL,
                'updated_at' => '2019-11-13 15:13:27',
            ),
            46 => 
            array (
                'created_at' => '2019-11-13 15:13:27',
                'id' => 47,
                'key' => 'browse_blog_posts',
                'table_name' => 'blog_posts',
                'updated_at' => '2019-11-13 15:13:27',
            ),
            47 => 
            array (
                'created_at' => '2019-11-13 15:13:27',
                'id' => 48,
                'key' => 'read_blog_posts',
                'table_name' => 'blog_posts',
                'updated_at' => '2019-11-13 15:13:27',
            ),
            48 => 
            array (
                'created_at' => '2019-11-13 15:13:27',
                'id' => 49,
                'key' => 'edit_blog_posts',
                'table_name' => 'blog_posts',
                'updated_at' => '2019-11-13 15:13:27',
            ),
            49 => 
            array (
                'created_at' => '2019-11-13 15:13:27',
                'id' => 50,
                'key' => 'add_blog_posts',
                'table_name' => 'blog_posts',
                'updated_at' => '2019-11-13 15:13:27',
            ),
            50 => 
            array (
                'created_at' => '2019-11-13 15:13:27',
                'id' => 51,
                'key' => 'delete_blog_posts',
                'table_name' => 'blog_posts',
                'updated_at' => '2019-11-13 15:13:27',
            ),
            51 => 
            array (
                'created_at' => '2019-11-13 15:13:30',
                'id' => 52,
                'key' => 'browse_pages',
                'table_name' => NULL,
                'updated_at' => '2019-11-13 15:13:30',
            ),
            52 => 
            array (
                'created_at' => '2019-11-13 15:13:30',
                'id' => 53,
                'key' => 'read_pages',
                'table_name' => NULL,
                'updated_at' => '2019-11-13 15:13:30',
            ),
            53 => 
            array (
                'created_at' => '2019-11-13 15:13:30',
                'id' => 54,
                'key' => 'edit_pages',
                'table_name' => NULL,
                'updated_at' => '2019-11-13 15:13:30',
            ),
            54 => 
            array (
                'created_at' => '2019-11-13 15:13:30',
                'id' => 55,
                'key' => 'add_pages',
                'table_name' => NULL,
                'updated_at' => '2019-11-13 15:13:30',
            ),
            55 => 
            array (
                'created_at' => '2019-11-13 15:13:30',
                'id' => 56,
                'key' => 'delete_pages',
                'table_name' => NULL,
                'updated_at' => '2019-11-13 15:13:30',
            ),
        ));
        
        
    }
}