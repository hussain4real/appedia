<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 1,
                'role_id' => 3,
                'name' => 'Hussain',
                'email' => 'hussain_aminu@yahoo.com',
                'avatar' => 'users\\March2020\\EIPikLccyYKLLVbAFq0E.jpg',
                'email_verified_at' => NULL,
                'password' => '$2y$10$yd68Im6UIMmXDarIorPsHuqwu.3sozt/iC0RcV/tMQw2cRFIoMkve',
                'remember_token' => 'K7KVH0izOFJ9PVdYSVeEKk58ZA2Myft77Df5Lv7n9A45Fh85FRBjuinPudth',
                'settings' => '{"locale":"en"}',
                'created_at' => '2020-03-19 10:59:33',
                'updated_at' => '2020-03-25 10:19:19',
            ),
            1 =>
            array (
                'id' => 2,
                'role_id' => 1,
                'name' => 'Admin',
                'email' => 'aminuhussain22@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$QQJ9AyW2UeGTWJ/cXHb/YOkScKjkIiQQuP.mffef8GnSgxZ76tpHW',
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2020-03-24 17:15:28',
                'updated_at' => '2020-03-24 19:07:08',
            ),
            2 =>
            array (
                'id' => 3,
                'role_id' => 3,
                'name' => 'Seller2',
                'email' => 'seller2@appedia.com',
                'avatar' => 'users\\March2020\\EIPikLccyYKLLVbAFq0E.jpg',
                'email_verified_at' => NULL,
                'password' => '$2y$10$yd68Im6UIMmXDarIorPsHuqwu.3sozt/iC0RcV/tMQw2cRFIoMkve',
                'remember_token' => 'K7KVH0izOFJ9PVdYSVeEKk58ZA2Myft77Df5Lv7n9A45Fh85FRBjuinPudth',
                'settings' => '{"locale":"en"}',
                'created_at' => '2020-03-19 10:59:33',
                'updated_at' => '2020-03-25 10:19:19',
            ),
            3 =>
            array (
                'id' => 4,
                'role_id' => 3,
                'name' => 'Seller3',
                'email' => 'seller3@appedia.com',
                'avatar' => 'users\\March2020\\EIPikLccyYKLLVbAFq0E.jpg',
                'email_verified_at' => NULL,
                'password' => '$2y$10$yd68Im6UIMmXDarIorPsHuqwu.3sozt/iC0RcV/tMQw2cRFIoMkve',
                'remember_token' => 'K7KVH0izOFJ9PVdYSVeEKk58ZA2Myft77Df5Lv7n9A45Fh85FRBjuinPudth',
                'settings' => '{"locale":"en"}',
                'created_at' => '2020-03-19 10:59:33',
                'updated_at' => '2020-03-25 10:19:19',
            ),

        ));


    }
}