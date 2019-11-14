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
                'created_at' => '2019-11-14 01:20:01',
                'updated_at' => '2019-11-14 01:20:01',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'primary',
                'created_at' => '2019-11-14 01:21:35',
                'updated_at' => '2019-11-14 01:21:35',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'social',
                'created_at' => '2019-11-14 01:21:50',
                'updated_at' => '2019-11-14 01:21:50',
            ),
        ));
        
        
    }
}