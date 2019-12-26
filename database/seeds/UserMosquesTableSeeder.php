<?php

use Illuminate\Database\Seeder;

class UserMosquesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_mosques')->delete();
        
        \DB::table('user_mosques')->insert(array (
            0 => 
            array (
                'user_id' => 1,
                'mosque_id' => 1,
            ),
            1 => 
            array (
                'user_id' => 2,
                'mosque_id' => 1,
            ),
            2 => 
            array (
                'user_id' => 2,
                'mosque_id' => 2,
            ),
            3 => 
            array (
                'user_id' => 1,
                'mosque_id' => 2,
            ),
        ));
        
        
    }
}