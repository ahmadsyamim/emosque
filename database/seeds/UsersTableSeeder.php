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
                'remember_token' => '8HTxvKlRsfMU3Nfa0EJrONsFJ3ov7wEsUTkPRfkesvdkYmjShPcQTEmntj47',
                'settings' => NULL,
                'created_at' => '2019-11-13 14:15:34',
                'updated_at' => '2019-11-13 14:15:34',
                'api_token' => 'BF1WEg288QcywWlDg28kBlCInfQtdruVdwm82x7hktez5eQzZAvFtxFR4hnE',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 3,
                'name' => 'Kamata',
                'email' => 'kamata@mail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$81a1BPvJN0EZFUdnfrNuR..KhF1oza5vLIbawO7eNPyIt93A8CiFG',
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2019-12-26 07:07:29',
                'updated_at' => '2019-12-26 07:11:24',
                'api_token' => NULL,
            ),
        ));
        
        
    }
}