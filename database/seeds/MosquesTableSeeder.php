<?php

use Illuminate\Database\Seeder;

class MosquesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('mosques')->delete();
        
        \DB::table('mosques')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Sapporo Masjid',
                'image' => '',
                'description' => '',
                'address' => 'Kita 14 jo Nishi 3 Chome 1-10,Kitaku,Sapporo,Hokkaido-Japan',
                'website' => 'http://www.sapporomasjid.com',
                'prefectures' => 'Hokkaido',
                'city' => 'Sapporo-shi',
                'status' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'country_id' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Masjid Al-Noor',
                'image' => '',
                'description' => '',
                'address' => 'Hokkaido Otaru-shi Inaho 5-4-27',
                'website' => 'http://www.noormasjid.com',
                'prefectures' => 'Hokkaido',
                'city' => 'Otaru-shi',
                'status' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'country_id' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Muroran Mosque',
                'image' => '',
                'description' => '',
                'address' => '5-18-6-1F Takasago-cho, Muroran-shi, Hokkaido',
                'website' => '',
                'prefectures' => 'Hokkaido',
                'city' => 'Muroran-shi',
                'status' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'country_id' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Chitose Outlet Mall RERA',
                'image' => '',
                'description' => '',
                'address' => '1-2-1 , Kashiwadai Minami, Shitose-shi, Hokkaido',
                'website' => 'http://www.outlet-rera.com/english/',
                'prefectures' => 'Hokkaido',
                'city' => 'Shitose-shi',
                'status' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'country_id' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Morioka Masjid',
                'image' => '',
                'description' => '',
                'address' => '2-22 Abetate-cho, Morioka-shi, Iwate',
                'website' => 'http://moriokamuslim.blogspot.jp/',
                'prefectures' => 'Iwate',
                'city' => 'Morioka-shi',
                'status' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'country_id' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Iwaki Masjid',
                'image' => '',
                'description' => '',
                'address' => '176-1 Miyanoshita Shimokawa , Izumi-cho , Iwaki-shi , Fukushima',
                'website' => '',
                'prefectures' => 'Fukushima',
                'city' => 'Iwaki-shi',
                'status' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'country_id' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Islamic Cultural Centre of Sendai',
                'image' => '',
                'description' => '',
                'address' => '7-24, hachiman 7-chome, Aoba-ku, Sendai, Miyagi, Japan.',
                'website' => 'http://iccsendai.org/web/en/',
                'prefectures' => 'Miyagi',
                'city' => 'sendai-shi',
                'status' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'country_id' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Tokyo Camii',
                'image' => '',
                'description' => '',
                'address' => '1-19 Oyama-cho, Shibuya-ku, Tokyo 151-0065, JAPAN',
                'website' => 'http://tokyocamii.org/',
                'prefectures' => 'Tokyo',
                'city' => 'Shibuya-ku',
                'status' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'country_id' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'As-Salaam Masjid',
                'image' => '',
                'description' => '',
                'address' => '4-6-7 Taito Taito-ku Tokyo 110-0016',
                'website' => 'http://assalaamfoundation.org/',
                'prefectures' => 'Tokyo',
                'city' => 'Taito-ku',
                'status' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'country_id' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Masjid Nusantara',
                'image' => '',
                'description' => '',
                'address' => '101-0041 Tokyo, Chiyoda-ku, Kanda Sudacho, 2−17',
                'website' => '',
                'prefectures' => 'Tokyo',
                'city' => 'Chiyoda-ku',
                'status' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'country_id' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Otsuka Masjid',
                'image' => '',
                'description' => '',
                'address' => '3-42-7 Minami Otsuka, Toshima-ku, Tokyo',
                'website' => 'http://www.islam.or.jp',
                'prefectures' => 'Tokyo',
                'city' => 'Toshima-ku',
                'status' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'country_id' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Kamata Masjid',
                'image' => '',
                'description' => '',
                'address' => '5-1-2 Kamata, Ota-ku, Tokyo',
                'website' => 'http://kamatamasjid.com',
                'prefectures' => 'Tokyo',
                'city' => 'Ota-ku',
                'status' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'country_id' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Al-Tawheed Mosque',
                'image' => '',
                'description' => '',
                'address' => '36-6 Hiraoka-cho Hachioji-shi Tokyo',
                'website' => 'http://www.geocities.jp/masjid_al_tawheed/',
                'prefectures' => 'Tokyo',
                'city' => 'Hachioji-shi',
                'status' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'country_id' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Hira Masjid',
                'image' => '',
                'description' => '',
                'address' => '3-3-19 Gyotoku Ekimae, Ichikawa-shi, Chiba',
                'website' => 'http://www.hiramasjid.org/',
                'prefectures' => 'Chiba',
                'city' => 'Ishikawa-shi',
                'status' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'country_id' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Ja’me Masjid Yokohama',
                'image' => '',
                'description' => '',
                'address' => '1-31-13 Hayabuchi, Tsuzuki-ku, Yokohama-city, Kanagawa',
                'website' => 'http://www.masjid-yokohama.jp',
                'prefectures' => 'Kanagawa',
                'city' => 'Yokohama-shi',
                'status' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'country_id' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Ebina Mosque',
                'image' => '',
                'description' => '',
                'address' => '3-12-1 Kamigo, Ebina-shi, Kanagawa',
                'website' => 'https://www.facebook.com/pages/Ebina-Mosque/352827714734696',
                'prefectures' => 'Kanagawa',
                'city' => 'Ebina-shi',
                'status' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'country_id' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Bilal Mosque',
                'image' => '',
                'description' => '',
                'address' => '6830-4 Minamijyo, Sakaki-machi, Hanishina-gun, Nagano',
                'website' => '',
                'prefectures' => 'Nagano',
                'city' => 'Hanishina-gun',
                'status' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'country_id' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Fuji Masjid',
                'image' => '',
                'description' => '',
                'address' => '2561-29 Nakazato, Fuji-shi, Shizuoka',
                'website' => '',
                'prefectures' => 'Shizuoka',
                'city' => 'Fuji-shi',
                'status' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'country_id' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Mohammadi Mosque',
                'image' => '',
                'description' => '',
                'address' => '161-2 Terawaki cho, Minami-ku, Hamamatsu-shi, Shizuoka',
                'website' => 'http://www.hamamatsumosque.com',
                'prefectures' => 'Shizuoka',
                'city' => 'Hamamatu-shi',
                'status' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'country_id' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Nagoya Mosque',
                'image' => '',
                'description' => '',
                'address' => '2-26-7 Honjindori, Nakamura-ku, Nagoya, Aichi',
                'website' => 'http://en.nagoyamosque.com',
                'prefectures' => 'Aichi',
                'city' => 'Nagoya-shi',
                'status' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'country_id' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Kyoto Masjid',
                'image' => '',
                'description' => '',
                'address' => 'Miyagaki-cho92, Kamigyo-ku Kawaramachi, Kyoto-shi, Kyoto',
                'website' => 'http://www.islamjapan.net/ibc/index.html',
                'prefectures' => 'Kyoto',
                'city' => 'Kyoto-shi',
                'status' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'country_id' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Osaka Masjid',
                'image' => '',
                'description' => '',
                'address' => '4-12-16 Owada Nishi Yodogawa-ku Osaka',
                'website' => 'http://osakamasjid.info',
                'prefectures' => 'Osaka',
                'city' => 'Yodogawa-ku',
                'status' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'country_id' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Osaka Ibaraki Mosque',
                'image' => '',
                'description' => '',
                'address' => '4-6-13, Toyokawa, Ibaraki City , Osaka',
                'website' => 'http://osakamosque.org',
                'prefectures' => 'Osaka',
                'city' => 'Ibaraki-shi',
                'status' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'country_id' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Kobe Muslim Mosque',
                'image' => '',
                'description' => '',
                'address' => '2-25-14 Nakayamate Dori, Chuo-ku, Kobe-shi, Hyogo',
                'website' => 'http://kobe-muslim-mosque.com',
                'prefectures' => 'Hyogo',
                'city' => 'kobe-shi',
                'status' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'country_id' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Okayama Islamic Center',
                'image' => '',
                'description' => '',
                'address' => '2-1-7 Tsushima Higashi, Kita-ku, Okayama-shi, Okayama',
                'website' => 'https://www.facebook.com/pages/Okayama-Islamic-Centre/123860261139298',
                'prefectures' => 'Okayama',
                'city' => 'Okayama-shi',
                'status' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'country_id' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Higashihiroshima Masjid',
                'image' => '',
                'description' => '',
                'address' => '2786-1, Taguchi, Saijyou-cho, Higashihiroshima-shi, Hiroshima',
                'website' => 'https://www.hiroshima-icc.org',
                'prefectures' => 'Hiroshima',
                'city' => 'Higashihiroshima-shi',
                'status' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'country_id' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Niihama Masjid',
                'image' => '',
                'description' => '',
                'address' => '2-2-43 Ikku-cho, Niihama-shi, Ehime',
                'website' => 'https://www.facebook.com/pages/新居浜マスジド/168623866678430',
                'prefectures' => 'Ehime',
                'city' => 'Niihama-shi',
                'status' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'country_id' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Fukuoka Masjid',
                'image' => '',
                'description' => '',
                'address' => '3-2-18 Hakozaki , Higashi-ku, Fukuoka-shi, Fukuoka',
                'website' => 'http://www.fukuokamasjid.org',
                'prefectures' => 'Fukuoka',
                'city' => 'Fukuoka-shi',
                'status' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'country_id' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Beppu Masjid',
                'image' => '',
                'description' => '',
                'address' => '10-19 Wakakusa-cho, Beppu-shi, Oita',
                'website' => '',
                'prefectures' => 'Oita',
                'city' => 'Beppu-shi',
                'status' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'country_id' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Kumamoto Islamic Center',
                'image' => '',
                'description' => '',
                'address' => '5-5-2, Kurokammi, chuou-ku, Kumamoto-shi, Kumamoto',
                'website' => 'http://www.kicjapan.com/',
                'prefectures' => 'Kumamoto',
                'city' => 'Kumamoto-shi',
                'status' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'country_id' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Kagoshima Masjid',
                'image' => '',
                'description' => '',
                'address' => '84-21, Masago-cho, Kagoshima',
                'website' => 'http://www.sicc-kagoshima.org',
                'prefectures' => 'Kagoshima',
                'city' => 'Masago-cho',
                'status' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'country_id' => NULL,
            ),
        ));
        
        
    }
}