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
                'role_id' => 1,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$5APKJtDwxzvUcVMNUJxSBubBdl46PT7blisfiddRmRdpVQ..AvBbG',
                'remember_token' => '912PmRb1EZE0xhsipelGmOPrC5kSJWpPTWXDMlLktB4DoTFdmRJmBZdJfvEy',
                'settings' => NULL,
                'created_at' => '2019-11-13 14:15:34',
                'updated_at' => '2019-11-13 14:15:34',
            ),
        ));
        
        
    }
}