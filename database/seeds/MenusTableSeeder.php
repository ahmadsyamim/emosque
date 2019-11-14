<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'created_at' => '2019-11-13 14:15:34',
                'id' => 1,
                'name' => 'admin',
                'updated_at' => '2019-11-13 14:15:34',
            ),
            1 => 
            array (
                'created_at' => '2019-11-13 15:13:27',
                'id' => 2,
                'name' => 'primary',
                'updated_at' => '2019-11-13 15:13:27',
            ),
            2 => 
            array (
                'created_at' => '2019-11-13 15:13:30',
                'id' => 3,
                'name' => 'social',
                'updated_at' => '2019-11-13 15:13:30',
            ),
        ));
        
        
    }
}