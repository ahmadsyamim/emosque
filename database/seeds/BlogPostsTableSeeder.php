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
                'id' => 1,
                'author_id' => 1,
                'category_id' => 1,
                'title' => 'Welcome to eMosque',
                'seo_title' => NULL,
                'excerpt' => 'Welcome to eMosque',
            'body' => '<p>Welcome to eMosque.<br /><br />A mosque (literally "place of ritual prostration") is a place of worship for Muslims. Any act of worship that follows the Islamic rules of prayer can be said to create a mosque, whether or not it takes place in a special building. Informal and open-air places of worship are called musalla, while mosques used for communal prayer on Fridays are known as jamiʿ. Mosque buildings typically contain an ornamental niche (mihrab) set into the wall that indicates the direction of Mecca (qiblah), ablution facilities and minarets from which calls to prayer are issued. The pulpit (minbar), from which the Friday sermon (khutba) is delivered, was in earlier times characteristic of the central city mosque, but has since become common in smaller mosques. Mosques typically have segregated spaces for men and women. This basic pattern of organization has assumed different forms depending on the region, period and denomination.</p>',
                'image' => 'mosques/samples/aarTsK26F0A5NPlbZ29r.jpg',
                'slug' => 'welcome-to-emosque',
                'meta_description' => 'Welcome to eMosque',
                'status' => 'PUBLISHED',
                'featured' => 0,
                'created_at' => '2019-11-13 15:13:27',
                'updated_at' => '2019-12-17 22:33:40',
                'tags' => NULL,
                'published_date' => '2019-12-11 00:00:00',
            ),
            1 => 
            array (
                'id' => 2,
                'author_id' => 1,
                'category_id' => 1,
                'title' => 'My Second Blog Post',
                'seo_title' => NULL,
                'excerpt' => 'An example blog post',
                'body' => '<p>Matey yardarm topmast broadside nipper weigh anchor jack quarterdeck crow\'s nest rigging. Topgallant lateen sail line avast me gun Pirate Round strike colors bilge rat take a caulk. Jack six pounders spanker doubloon clipper spirits case shot hang the jib boatswain red ensign.</p>
<p>Hornswaggle spanker spyglass Yellow Jack mutiny Arr lugger poop deck keel take a caulk. Quarter fire ship run a shot across the bow sheet log draft scallywag gally port skysail. Lugsail gangway draft pink piracy bilge Buccaneer heave to landlubber or just lubber Pieces of Eight.</p>',
                'image' => 'mosques/samples/erZtpVo7feAPXwB98tvK.jpg',
                'slug' => 'my-second-blog-post',
                'meta_description' => 'A test blog post',
                'status' => 'PENDING',
                'featured' => 0,
                'created_at' => '2019-11-13 15:13:27',
                'updated_at' => '2019-12-17 22:33:02',
                'tags' => NULL,
                'published_date' => '2018-05-11 00:00:00',
            ),
        ));
        
        
    }
}