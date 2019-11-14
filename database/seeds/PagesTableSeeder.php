<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pages')->delete();
        
        \DB::table('pages')->insert(array (
            0 => 
            array (
                'author_id' => 0,
                'body' => '<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>
<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>',
                'created_at' => '2019-11-13 14:15:35',
                'excerpt' => 'Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.',
                'id' => 1,
                'image' => 'pages/page1.jpg',
                'layout' => NULL,
                'meta_description' => 'Yar Meta Description',
                'slug' => 'hello-world',
                'status' => 'ACTIVE',
                'title' => 'Hello World',
                'updated_at' => '2019-11-13 14:15:35',
            ),
            1 => 
            array (
                'author_id' => 0,
                'body' => '<p><br /></p><h3 class="text-center">This is the body of the lorem ipsum page</h3><p class="text-center">This is the body of the lorem ipsum page</p><p><br /></p>',
                'created_at' => '2019-11-13 15:13:30',
                'excerpt' => 'This is the excerpt for the Lorem Ipsum Page',
                'id' => 2,
                'image' => 'pages/page1.jpg',
                'layout' => NULL,
                'meta_description' => 'This is the meta description',
                'slug' => 'home',
                'status' => 'ACTIVE',
                'title' => 'Home',
                'updated_at' => '2019-11-13 15:13:30',
            ),
            2 => 
            array (
                'author_id' => 0,
                'body' => '<p><br /></p><h3 class="text-center">This is the body of the lorem ipsum page</h3><p class="text-center">This is the body of the lorem ipsum page</p><p><br /></p>',
                'created_at' => '2019-11-13 15:13:30',
                'excerpt' => 'This is the excerpt for the Lorem Ipsum Page',
                'id' => 3,
                'image' => 'posts/post2.jpg',
                'layout' => NULL,
                'meta_description' => 'This is the meta description for about',
                'slug' => 'about',
                'status' => 'ACTIVE',
                'title' => 'About',
                'updated_at' => '2019-11-13 15:13:30',
            ),
            3 => 
            array (
                'author_id' => 0,
                'body' => '<p><br /></p><h3 class="text-center">This is the body of the lorem ipsum page</h3><p class="text-center">This is the body of the lorem ipsum page</p><p><br /></p>',
                'created_at' => '2019-11-13 15:13:30',
                'excerpt' => 'This is the excerpt for the Lorem Ipsum Page',
                'id' => 4,
                'image' => 'posts/post2.jpg',
                'layout' => NULL,
                'meta_description' => 'This is the meta description for contact',
                'slug' => 'contact',
                'status' => 'ACTIVE',
                'title' => 'Contact',
                'updated_at' => '2019-11-13 15:13:30',
            ),
        ));
        
        
    }
}