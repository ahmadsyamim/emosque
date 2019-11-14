<?php

use Illuminate\Database\Seeder;

class BlogPostsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('blog_posts')->delete();
        
        \DB::table('blog_posts')->insert(array (
            0 => 
            array (
                'author_id' => 0,
                'body' => '<p>Matey yardarm topmast broadside nipper weigh anchor jack quarterdeck crow\'s nest rigging. Topgallant lateen sail line avast me gun Pirate Round strike colors bilge rat take a caulk. Jack six pounders spanker doubloon clipper spirits case shot hang the jib boatswain red ensign.</p>
<p>Hornswaggle spanker spyglass Yellow Jack mutiny Arr lugger poop deck keel take a caulk. Quarter fire ship run a shot across the bow sheet log draft scallywag gally port skysail. Lugsail gangway draft pink piracy bilge Buccaneer heave to landlubber or just lubber Pieces of Eight.</p>',
                'category_id' => 1,
                'created_at' => '2019-11-13 15:13:27',
                'excerpt' => 'An example blog post',
                'featured' => 0,
                'id' => 1,
                'image' => NULL,
                'meta_description' => 'A test blog post',
                'published_date' => '2018-05-11 00:00:00',
                'seo_title' => NULL,
                'slug' => 'my-first-blog-post',
                'status' => 'PUBLISHED',
                'tags' => NULL,
                'title' => 'My First Blog Post',
                'updated_at' => '2019-11-13 15:13:27',
            ),
            1 => 
            array (
                'author_id' => 0,
                'body' => '<p>Matey yardarm topmast broadside nipper weigh anchor jack quarterdeck crow\'s nest rigging. Topgallant lateen sail line avast me gun Pirate Round strike colors bilge rat take a caulk. Jack six pounders spanker doubloon clipper spirits case shot hang the jib boatswain red ensign.</p>
<p>Hornswaggle spanker spyglass Yellow Jack mutiny Arr lugger poop deck keel take a caulk. Quarter fire ship run a shot across the bow sheet log draft scallywag gally port skysail. Lugsail gangway draft pink piracy bilge Buccaneer heave to landlubber or just lubber Pieces of Eight.</p>',
                'category_id' => 1,
                'created_at' => '2019-11-13 15:13:27',
                'excerpt' => 'An example blog post',
                'featured' => 0,
                'id' => 2,
                'image' => NULL,
                'meta_description' => 'A test blog post',
                'published_date' => '2018-05-11 00:00:00',
                'seo_title' => NULL,
                'slug' => 'my-second-blog-post',
                'status' => 'PUBLISHED',
                'tags' => NULL,
                'title' => 'My Second Blog Post',
                'updated_at' => '2019-11-13 15:13:27',
            ),
        ));
        
        
    }
}