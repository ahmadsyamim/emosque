<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('events')->delete();
        
        \DB::table('events')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Event 1',
                'description' => 'Event 1',
                'image' => NULL,
                'date_from' => '2019-11-20 11:26:00',
                'date_to' => '2019-11-21 11:26:00',
                'user_id' => NULL,
                'mosque_id' => 3,
                'created_at' => '2019-11-20 02:26:00',
                'updated_at' => '2019-12-23 03:20:45',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Event 2',
                'description' => 'Event 2',
                'image' => NULL,
                'date_from' => '2019-11-21 11:26:00',
                'date_to' => '2019-11-22 11:26:00',
                'user_id' => NULL,
                'mosque_id' => 1,
                'created_at' => '2019-11-20 02:27:00',
                'updated_at' => '2019-11-20 02:36:07',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Event Kamata',
                'description' => 'Event Kamata',
                'image' => 'events/December2019/TLcCULIVth7mktKI5cJs.jpg',
                'date_from' => '2019-12-26 13:10:00',
                'date_to' => '2019-12-28 13:30:00',
                'user_id' => NULL,
                'mosque_id' => 12,
                'created_at' => '2019-12-26 04:38:18',
                'updated_at' => '2019-12-26 04:38:18',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}