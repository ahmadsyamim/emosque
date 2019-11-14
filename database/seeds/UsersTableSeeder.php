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
                'avatar' => 'users/default.png',
                'created_at' => '2019-11-13 14:15:34',
                'email' => 'admin@admin.com',
                'email_verified_at' => NULL,
                'id' => 1,
                'name' => 'Admin',
                'password' => '$2y$10$5APKJtDwxzvUcVMNUJxSBubBdl46PT7blisfiddRmRdpVQ..AvBbG',
                'remember_token' => '912PmRb1EZE0xhsipelGmOPrC5kSJWpPTWXDMlLktB4DoTFdmRJmBZdJfvEy',
                'role_id' => 1,
                'settings' => NULL,
                'updated_at' => '2019-11-13 14:15:34',
            ),
        ));
        
        
    }
}