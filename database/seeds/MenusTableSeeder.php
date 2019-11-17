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
                'id' => 1,
                'name' => 'admin',
                'created_at' => '2019-11-13 14:15:34',
                'updated_at' => '2019-11-13 14:15:34',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'primary',
                'created_at' => '2019-11-13 15:13:27',
                'updated_at' => '2019-11-13 15:13:27',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'social',
                'created_at' => '2019-11-13 15:13:30',
                'updated_at' => '2019-11-13 15:13:30',
            ),
        ));
        
        
    }
}