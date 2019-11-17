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
                'id' => 1,
                'author_id' => 0,
                'title' => 'Hello World',
                'excerpt' => 'Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.',
                'body' => '<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>
<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>',
                'image' => 'pages/page1.jpg',
                'slug' => 'hello-world',
                'meta_description' => 'Yar Meta Description',
                'status' => 'ACTIVE',
                'created_at' => '2019-11-13 14:15:35',
                'updated_at' => '2019-11-13 14:15:35',
                'layout' => NULL,
                'meta_keywords' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'author_id' => 0,
                'title' => 'Home',
                'excerpt' => 'This is the excerpt for the Lorem Ipsum Page',
                'body' => '<p><br /></p><h3 class="text-center">This is the body of the lorem ipsum page</h3><p class="text-center">This is the body of the lorem ipsum page</p><p><br /></p>',
                'image' => 'pages/page1.jpg',
                'slug' => 'home',
                'meta_description' => 'This is the meta description',
                'status' => 'ACTIVE',
                'created_at' => '2019-11-13 15:13:30',
                'updated_at' => '2019-11-13 15:13:30',
                'layout' => NULL,
                'meta_keywords' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'author_id' => 0,
                'title' => 'About',
                'excerpt' => 'This is the excerpt for the Lorem Ipsum Page',
                'body' => '<p><br /></p><h3 class="text-center">This is the body of the lorem ipsum page</h3><p class="text-center">This is the body of the lorem ipsum page</p><p><br /></p>',
                'image' => 'posts/post2.jpg',
                'slug' => 'about',
                'meta_description' => 'This is the meta description for about',
                'status' => 'ACTIVE',
                'created_at' => '2019-11-13 15:13:30',
                'updated_at' => '2019-11-13 15:13:30',
                'layout' => NULL,
                'meta_keywords' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'author_id' => 0,
                'title' => 'Contact',
                'excerpt' => 'This is the excerpt for the Lorem Ipsum Page',
                'body' => '<p><br /></p><h3 class="text-center">This is the body of the lorem ipsum page</h3><p class="text-center">This is the body of the lorem ipsum page</p><p><br /></p>',
                'image' => 'posts/post2.jpg',
                'slug' => 'contact',
                'meta_description' => 'This is the meta description for contact',
                'status' => 'ACTIVE',
                'created_at' => '2019-11-13 15:13:30',
                'updated_at' => '2019-11-13 15:13:30',
                'layout' => NULL,
                'meta_keywords' => NULL,
            ),
        ));
        
        
    }
}