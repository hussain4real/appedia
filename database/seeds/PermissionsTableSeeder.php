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
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2020-03-23 17:54:14',
                'updated_at' => '2020-03-23 17:54:14',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2020-03-23 17:54:14',
                'updated_at' => '2020-03-23 17:54:14',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2020-03-23 17:54:14',
                'updated_at' => '2020-03-23 17:54:14',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2020-03-23 17:54:14',
                'updated_at' => '2020-03-23 17:54:14',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2020-03-23 17:54:15',
                'updated_at' => '2020-03-23 17:54:15',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2020-03-23 17:54:15',
                'updated_at' => '2020-03-23 17:54:15',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2020-03-23 17:54:15',
                'updated_at' => '2020-03-23 17:54:15',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2020-03-23 17:54:15',
                'updated_at' => '2020-03-23 17:54:15',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2020-03-23 17:54:15',
                'updated_at' => '2020-03-23 17:54:15',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2020-03-23 17:54:15',
                'updated_at' => '2020-03-23 17:54:15',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2020-03-23 17:54:15',
                'updated_at' => '2020-03-23 17:54:15',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2020-03-23 17:54:15',
                'updated_at' => '2020-03-23 17:54:15',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2020-03-23 17:54:15',
                'updated_at' => '2020-03-23 17:54:15',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2020-03-23 17:54:15',
                'updated_at' => '2020-03-23 17:54:15',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2020-03-23 17:54:15',
                'updated_at' => '2020-03-23 17:54:15',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2020-03-23 17:54:15',
                'updated_at' => '2020-03-23 17:54:15',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2020-03-23 17:54:15',
                'updated_at' => '2020-03-23 17:54:15',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2020-03-23 17:54:15',
                'updated_at' => '2020-03-23 17:54:15',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2020-03-23 17:54:15',
                'updated_at' => '2020-03-23 17:54:15',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2020-03-23 17:54:15',
                'updated_at' => '2020-03-23 17:54:15',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2020-03-23 17:54:16',
                'updated_at' => '2020-03-23 17:54:16',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2020-03-23 17:54:16',
                'updated_at' => '2020-03-23 17:54:16',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2020-03-23 17:54:16',
                'updated_at' => '2020-03-23 17:54:16',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2020-03-23 17:54:16',
                'updated_at' => '2020-03-23 17:54:16',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2020-03-23 17:54:16',
                'updated_at' => '2020-03-23 17:54:16',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'created_at' => '2020-03-23 17:54:26',
                'updated_at' => '2020-03-23 17:54:26',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'created_at' => '2020-03-23 17:54:26',
                'updated_at' => '2020-03-23 17:54:26',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'created_at' => '2020-03-23 17:54:26',
                'updated_at' => '2020-03-23 17:54:26',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'created_at' => '2020-03-23 17:54:26',
                'updated_at' => '2020-03-23 17:54:26',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'created_at' => '2020-03-23 17:54:26',
                'updated_at' => '2020-03-23 17:54:26',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'browse_posts',
                'table_name' => 'posts',
                'created_at' => '2020-03-23 17:54:28',
                'updated_at' => '2020-03-23 17:54:28',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'read_posts',
                'table_name' => 'posts',
                'created_at' => '2020-03-23 17:54:28',
                'updated_at' => '2020-03-23 17:54:28',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'edit_posts',
                'table_name' => 'posts',
                'created_at' => '2020-03-23 17:54:28',
                'updated_at' => '2020-03-23 17:54:28',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'add_posts',
                'table_name' => 'posts',
                'created_at' => '2020-03-23 17:54:29',
                'updated_at' => '2020-03-23 17:54:29',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'delete_posts',
                'table_name' => 'posts',
                'created_at' => '2020-03-23 17:54:29',
                'updated_at' => '2020-03-23 17:54:29',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'browse_pages',
                'table_name' => 'pages',
                'created_at' => '2020-03-23 17:54:30',
                'updated_at' => '2020-03-23 17:54:30',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'read_pages',
                'table_name' => 'pages',
                'created_at' => '2020-03-23 17:54:30',
                'updated_at' => '2020-03-23 17:54:30',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'edit_pages',
                'table_name' => 'pages',
                'created_at' => '2020-03-23 17:54:30',
                'updated_at' => '2020-03-23 17:54:30',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'add_pages',
                'table_name' => 'pages',
                'created_at' => '2020-03-23 17:54:30',
                'updated_at' => '2020-03-23 17:54:30',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'delete_pages',
                'table_name' => 'pages',
                'created_at' => '2020-03-23 17:54:30',
                'updated_at' => '2020-03-23 17:54:30',
            ),
            40 => 
            array (
                'id' => 41,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2020-03-23 17:54:33',
                'updated_at' => '2020-03-23 17:54:33',
            ),
            41 => 
            array (
                'id' => 42,
                'key' => 'browse_orders',
                'table_name' => 'orders',
                'created_at' => '2020-03-23 20:25:41',
                'updated_at' => '2020-03-23 20:25:41',
            ),
            42 => 
            array (
                'id' => 43,
                'key' => 'read_orders',
                'table_name' => 'orders',
                'created_at' => '2020-03-23 20:25:41',
                'updated_at' => '2020-03-23 20:25:41',
            ),
            43 => 
            array (
                'id' => 44,
                'key' => 'edit_orders',
                'table_name' => 'orders',
                'created_at' => '2020-03-23 20:25:41',
                'updated_at' => '2020-03-23 20:25:41',
            ),
            44 => 
            array (
                'id' => 45,
                'key' => 'add_orders',
                'table_name' => 'orders',
                'created_at' => '2020-03-23 20:25:41',
                'updated_at' => '2020-03-23 20:25:41',
            ),
            45 => 
            array (
                'id' => 46,
                'key' => 'delete_orders',
                'table_name' => 'orders',
                'created_at' => '2020-03-23 20:25:41',
                'updated_at' => '2020-03-23 20:25:41',
            ),
            46 => 
            array (
                'id' => 47,
                'key' => 'browse_shops',
                'table_name' => 'shops',
                'created_at' => '2020-03-24 16:58:19',
                'updated_at' => '2020-03-24 16:58:19',
            ),
            47 => 
            array (
                'id' => 48,
                'key' => 'read_shops',
                'table_name' => 'shops',
                'created_at' => '2020-03-24 16:58:19',
                'updated_at' => '2020-03-24 16:58:19',
            ),
            48 => 
            array (
                'id' => 49,
                'key' => 'edit_shops',
                'table_name' => 'shops',
                'created_at' => '2020-03-24 16:58:19',
                'updated_at' => '2020-03-24 16:58:19',
            ),
            49 => 
            array (
                'id' => 50,
                'key' => 'add_shops',
                'table_name' => 'shops',
                'created_at' => '2020-03-24 16:58:19',
                'updated_at' => '2020-03-24 16:58:19',
            ),
            50 => 
            array (
                'id' => 51,
                'key' => 'delete_shops',
                'table_name' => 'shops',
                'created_at' => '2020-03-24 16:58:19',
                'updated_at' => '2020-03-24 16:58:19',
            ),
            51 => 
            array (
                'id' => 52,
                'key' => 'browse_products',
                'table_name' => 'products',
                'created_at' => '2020-03-25 13:38:43',
                'updated_at' => '2020-03-25 13:38:43',
            ),
            52 => 
            array (
                'id' => 53,
                'key' => 'read_products',
                'table_name' => 'products',
                'created_at' => '2020-03-25 13:38:44',
                'updated_at' => '2020-03-25 13:38:44',
            ),
            53 => 
            array (
                'id' => 54,
                'key' => 'edit_products',
                'table_name' => 'products',
                'created_at' => '2020-03-25 13:38:44',
                'updated_at' => '2020-03-25 13:38:44',
            ),
            54 => 
            array (
                'id' => 55,
                'key' => 'add_products',
                'table_name' => 'products',
                'created_at' => '2020-03-25 13:38:44',
                'updated_at' => '2020-03-25 13:38:44',
            ),
            55 => 
            array (
                'id' => 56,
                'key' => 'delete_products',
                'table_name' => 'products',
                'created_at' => '2020-03-25 13:38:44',
                'updated_at' => '2020-03-25 13:38:44',
            ),
        ));
        
        
    }
}