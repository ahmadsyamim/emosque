<?php

use Illuminate\Database\Seeder;

class TranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('translations')->delete();
        
        \DB::table('translations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 5,
                'locale' => 'pt',
                'value' => 'Post',
                'created_at' => '2019-11-13 14:15:35',
                'updated_at' => '2019-11-13 14:15:35',
            ),
            1 => 
            array (
                'id' => 2,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 6,
                'locale' => 'pt',
                'value' => 'Página',
                'created_at' => '2019-11-13 14:15:35',
                'updated_at' => '2019-11-13 14:15:35',
            ),
            2 => 
            array (
                'id' => 3,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 1,
                'locale' => 'pt',
                'value' => 'Utilizador',
                'created_at' => '2019-11-13 14:15:35',
                'updated_at' => '2019-11-13 14:15:35',
            ),
            3 => 
            array (
                'id' => 4,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 4,
                'locale' => 'pt',
                'value' => 'Categoria',
                'created_at' => '2019-11-13 14:15:35',
                'updated_at' => '2019-11-13 14:15:35',
            ),
            4 => 
            array (
                'id' => 5,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 2,
                'locale' => 'pt',
                'value' => 'Menu',
                'created_at' => '2019-11-13 14:15:35',
                'updated_at' => '2019-11-13 14:15:35',
            ),
            5 => 
            array (
                'id' => 6,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 3,
                'locale' => 'pt',
                'value' => 'Função',
                'created_at' => '2019-11-13 14:15:35',
                'updated_at' => '2019-11-13 14:15:35',
            ),
            6 => 
            array (
                'id' => 7,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 5,
                'locale' => 'pt',
                'value' => 'Posts',
                'created_at' => '2019-11-13 14:15:35',
                'updated_at' => '2019-11-13 14:15:35',
            ),
            7 => 
            array (
                'id' => 8,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 6,
                'locale' => 'pt',
                'value' => 'Páginas',
                'created_at' => '2019-11-13 14:15:35',
                'updated_at' => '2019-11-13 14:15:35',
            ),
            8 => 
            array (
                'id' => 9,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 1,
                'locale' => 'pt',
                'value' => 'Utilizadores',
                'created_at' => '2019-11-13 14:15:35',
                'updated_at' => '2019-11-13 14:15:35',
            ),
            9 => 
            array (
                'id' => 10,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 4,
                'locale' => 'pt',
                'value' => 'Categorias',
                'created_at' => '2019-11-13 14:15:35',
                'updated_at' => '2019-11-13 14:15:35',
            ),
            10 => 
            array (
                'id' => 11,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 2,
                'locale' => 'pt',
                'value' => 'Menus',
                'created_at' => '2019-11-13 14:15:35',
                'updated_at' => '2019-11-13 14:15:35',
            ),
            11 => 
            array (
                'id' => 12,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 3,
                'locale' => 'pt',
                'value' => 'Funções',
                'created_at' => '2019-11-13 14:15:35',
                'updated_at' => '2019-11-13 14:15:35',
            ),
            12 => 
            array (
                'id' => 13,
                'table_name' => 'categories',
                'column_name' => 'slug',
                'foreign_key' => 1,
                'locale' => 'pt',
                'value' => 'categoria-1',
                'created_at' => '2019-11-13 14:15:35',
                'updated_at' => '2019-11-13 14:15:35',
            ),
            13 => 
            array (
                'id' => 14,
                'table_name' => 'categories',
                'column_name' => 'name',
                'foreign_key' => 1,
                'locale' => 'pt',
                'value' => 'Categoria 1',
                'created_at' => '2019-11-13 14:15:35',
                'updated_at' => '2019-11-13 14:15:35',
            ),
            14 => 
            array (
                'id' => 15,
                'table_name' => 'categories',
                'column_name' => 'slug',
                'foreign_key' => 2,
                'locale' => 'pt',
                'value' => 'categoria-2',
                'created_at' => '2019-11-13 14:15:35',
                'updated_at' => '2019-11-13 14:15:35',
            ),
            15 => 
            array (
                'id' => 16,
                'table_name' => 'categories',
                'column_name' => 'name',
                'foreign_key' => 2,
                'locale' => 'pt',
                'value' => 'Categoria 2',
                'created_at' => '2019-11-13 14:15:35',
                'updated_at' => '2019-11-13 14:15:35',
            ),
            16 => 
            array (
                'id' => 17,
                'table_name' => 'pages',
                'column_name' => 'title',
                'foreign_key' => 1,
                'locale' => 'pt',
                'value' => 'Olá Mundo',
                'created_at' => '2019-11-13 14:15:35',
                'updated_at' => '2019-11-13 14:15:35',
            ),
            17 => 
            array (
                'id' => 18,
                'table_name' => 'pages',
                'column_name' => 'slug',
                'foreign_key' => 1,
                'locale' => 'pt',
                'value' => 'ola-mundo',
                'created_at' => '2019-11-13 14:15:35',
                'updated_at' => '2019-11-13 14:15:35',
            ),
            18 => 
            array (
                'id' => 19,
                'table_name' => 'pages',
                'column_name' => 'body',
                'foreign_key' => 1,
                'locale' => 'pt',
                'value' => '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>
<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>',
                'created_at' => '2019-11-13 14:15:35',
                'updated_at' => '2019-11-13 14:15:35',
            ),
            19 => 
            array (
                'id' => 20,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 1,
                'locale' => 'pt',
                'value' => 'Painel de Controle',
                'created_at' => '2019-11-13 14:15:35',
                'updated_at' => '2019-11-13 14:15:35',
            ),
            20 => 
            array (
                'id' => 21,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 2,
                'locale' => 'pt',
                'value' => 'Media',
                'created_at' => '2019-11-13 14:15:35',
                'updated_at' => '2019-11-13 14:15:35',
            ),
            21 => 
            array (
                'id' => 22,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 12,
                'locale' => 'pt',
                'value' => 'Publicações',
                'created_at' => '2019-11-13 14:15:35',
                'updated_at' => '2019-11-13 14:15:35',
            ),
            22 => 
            array (
                'id' => 23,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 3,
                'locale' => 'pt',
                'value' => 'Utilizadores',
                'created_at' => '2019-11-13 14:15:35',
                'updated_at' => '2019-11-13 14:15:35',
            ),
            23 => 
            array (
                'id' => 24,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 11,
                'locale' => 'pt',
                'value' => 'Categorias',
                'created_at' => '2019-11-13 14:15:35',
                'updated_at' => '2019-11-13 14:15:35',
            ),
            24 => 
            array (
                'id' => 25,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 13,
                'locale' => 'pt',
                'value' => 'Páginas',
                'created_at' => '2019-11-13 14:15:35',
                'updated_at' => '2019-11-13 14:15:35',
            ),
            25 => 
            array (
                'id' => 26,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 4,
                'locale' => 'pt',
                'value' => 'Funções',
                'created_at' => '2019-11-13 14:15:35',
                'updated_at' => '2019-11-13 14:15:35',
            ),
            26 => 
            array (
                'id' => 27,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 5,
                'locale' => 'pt',
                'value' => 'Ferramentas',
                'created_at' => '2019-11-13 14:15:35',
                'updated_at' => '2019-11-13 14:15:35',
            ),
            27 => 
            array (
                'id' => 28,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 6,
                'locale' => 'pt',
                'value' => 'Menus',
                'created_at' => '2019-11-13 14:15:35',
                'updated_at' => '2019-11-13 14:15:35',
            ),
            28 => 
            array (
                'id' => 29,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 7,
                'locale' => 'pt',
                'value' => 'Base de dados',
                'created_at' => '2019-11-13 14:15:35',
                'updated_at' => '2019-11-13 14:15:35',
            ),
            29 => 
            array (
                'id' => 30,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 10,
                'locale' => 'pt',
                'value' => 'Configurações',
                'created_at' => '2019-11-13 14:15:35',
                'updated_at' => '2019-11-13 14:15:35',
            ),
            30 => 
            array (
                'id' => 31,
                'table_name' => 'events',
                'column_name' => 'title',
                'foreign_key' => 2,
                'locale' => 'ja',
                'value' => 'イベント2',
                'created_at' => '2019-12-23 03:19:38',
                'updated_at' => '2019-12-23 03:19:38',
            ),
            31 => 
            array (
                'id' => 32,
                'table_name' => 'events',
                'column_name' => 'description',
                'foreign_key' => 2,
                'locale' => 'ja',
                'value' => 'イベント2',
                'created_at' => '2019-12-23 03:19:38',
                'updated_at' => '2019-12-23 03:19:38',
            ),
            32 => 
            array (
                'id' => 33,
                'table_name' => 'events',
                'column_name' => 'title',
                'foreign_key' => 1,
                'locale' => 'ja',
                'value' => 'イベント1',
                'created_at' => '2019-12-23 03:19:55',
                'updated_at' => '2019-12-23 03:20:45',
            ),
            33 => 
            array (
                'id' => 34,
                'table_name' => 'events',
                'column_name' => 'description',
                'foreign_key' => 1,
                'locale' => 'ja',
                'value' => 'イベント1',
                'created_at' => '2019-12-23 03:19:55',
                'updated_at' => '2019-12-23 03:20:45',
            ),
            34 => 
            array (
                'id' => 35,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 83,
                'locale' => 'ja',
                'value' => 'Id',
                'created_at' => '2019-12-23 07:45:49',
                'updated_at' => '2019-12-23 07:45:49',
            ),
            35 => 
            array (
                'id' => 36,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 84,
                'locale' => 'ja',
                'value' => 'Title',
                'created_at' => '2019-12-23 07:45:50',
                'updated_at' => '2019-12-23 07:45:50',
            ),
            36 => 
            array (
                'id' => 37,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 85,
                'locale' => 'ja',
                'value' => 'Description',
                'created_at' => '2019-12-23 07:45:50',
                'updated_at' => '2019-12-23 07:45:50',
            ),
            37 => 
            array (
                'id' => 38,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 86,
                'locale' => 'ja',
                'value' => 'Image',
                'created_at' => '2019-12-23 07:45:50',
                'updated_at' => '2019-12-23 07:45:50',
            ),
            38 => 
            array (
                'id' => 39,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 87,
                'locale' => 'ja',
                'value' => 'Date From',
                'created_at' => '2019-12-23 07:45:51',
                'updated_at' => '2019-12-23 07:45:51',
            ),
            39 => 
            array (
                'id' => 40,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 88,
                'locale' => 'ja',
                'value' => 'Date To',
                'created_at' => '2019-12-23 07:45:51',
                'updated_at' => '2019-12-23 07:45:51',
            ),
            40 => 
            array (
                'id' => 41,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 89,
                'locale' => 'ja',
                'value' => 'User Id',
                'created_at' => '2019-12-23 07:45:51',
                'updated_at' => '2019-12-23 07:45:51',
            ),
            41 => 
            array (
                'id' => 42,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 90,
                'locale' => 'ja',
                'value' => 'Mosque Id',
                'created_at' => '2019-12-23 07:45:52',
                'updated_at' => '2019-12-23 07:45:52',
            ),
            42 => 
            array (
                'id' => 43,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 91,
                'locale' => 'ja',
                'value' => 'Created At',
                'created_at' => '2019-12-23 07:45:52',
                'updated_at' => '2019-12-23 07:45:52',
            ),
            43 => 
            array (
                'id' => 44,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 92,
                'locale' => 'ja',
                'value' => 'Updated At',
                'created_at' => '2019-12-23 07:45:52',
                'updated_at' => '2019-12-23 07:45:52',
            ),
            44 => 
            array (
                'id' => 45,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 93,
                'locale' => 'ja',
                'value' => 'Deleted At',
                'created_at' => '2019-12-23 07:45:52',
                'updated_at' => '2019-12-23 07:45:52',
            ),
            45 => 
            array (
                'id' => 46,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 94,
                'locale' => 'ja',
                'value' => 'Mosque',
                'created_at' => '2019-12-23 07:45:53',
                'updated_at' => '2019-12-23 07:45:53',
            ),
            46 => 
            array (
                'id' => 47,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 10,
                'locale' => 'ja',
                'value' => 'Event',
                'created_at' => '2019-12-23 07:45:53',
                'updated_at' => '2019-12-23 07:45:53',
            ),
            47 => 
            array (
                'id' => 48,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 10,
                'locale' => 'ja',
                'value' => 'Events',
                'created_at' => '2019-12-23 07:45:53',
                'updated_at' => '2019-12-23 07:45:53',
            ),
            48 => 
            array (
                'id' => 49,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 71,
                'locale' => 'ja',
                'value' => 'Id',
                'created_at' => '2019-12-26 07:06:59',
                'updated_at' => '2019-12-26 07:06:59',
            ),
            49 => 
            array (
                'id' => 50,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 72,
                'locale' => 'ja',
                'value' => 'Name',
                'created_at' => '2019-12-26 07:06:59',
                'updated_at' => '2019-12-26 07:06:59',
            ),
            50 => 
            array (
                'id' => 51,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 73,
                'locale' => 'ja',
                'value' => 'Image',
                'created_at' => '2019-12-26 07:06:59',
                'updated_at' => '2019-12-26 07:06:59',
            ),
            51 => 
            array (
                'id' => 52,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 74,
                'locale' => 'ja',
                'value' => 'Description',
                'created_at' => '2019-12-26 07:07:00',
                'updated_at' => '2019-12-26 07:07:00',
            ),
            52 => 
            array (
                'id' => 53,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 75,
                'locale' => 'ja',
                'value' => 'Address',
                'created_at' => '2019-12-26 07:07:00',
                'updated_at' => '2019-12-26 07:07:00',
            ),
            53 => 
            array (
                'id' => 54,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 76,
                'locale' => 'ja',
                'value' => 'Website',
                'created_at' => '2019-12-26 07:07:00',
                'updated_at' => '2019-12-26 07:07:00',
            ),
            54 => 
            array (
                'id' => 55,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 77,
                'locale' => 'ja',
                'value' => 'Prefectures',
                'created_at' => '2019-12-26 07:07:01',
                'updated_at' => '2019-12-26 07:07:01',
            ),
            55 => 
            array (
                'id' => 56,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 78,
                'locale' => 'ja',
                'value' => 'City',
                'created_at' => '2019-12-26 07:07:01',
                'updated_at' => '2019-12-26 07:07:01',
            ),
            56 => 
            array (
                'id' => 57,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 95,
                'locale' => 'ja',
                'value' => 'Country Id',
                'created_at' => '2019-12-26 07:07:01',
                'updated_at' => '2019-12-26 07:07:01',
            ),
            57 => 
            array (
                'id' => 58,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 79,
                'locale' => 'ja',
                'value' => 'Status',
                'created_at' => '2019-12-26 07:07:01',
                'updated_at' => '2019-12-26 07:07:01',
            ),
            58 => 
            array (
                'id' => 59,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 80,
                'locale' => 'ja',
                'value' => 'Created At',
                'created_at' => '2019-12-26 07:07:01',
                'updated_at' => '2019-12-26 07:07:01',
            ),
            59 => 
            array (
                'id' => 60,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 81,
                'locale' => 'ja',
                'value' => 'Updated At',
                'created_at' => '2019-12-26 07:07:02',
                'updated_at' => '2019-12-26 07:07:02',
            ),
            60 => 
            array (
                'id' => 61,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 82,
                'locale' => 'ja',
                'value' => 'Deleted At',
                'created_at' => '2019-12-26 07:07:02',
                'updated_at' => '2019-12-26 07:07:02',
            ),
            61 => 
            array (
                'id' => 62,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 96,
                'locale' => 'ja',
                'value' => 'Country',
                'created_at' => '2019-12-26 07:07:02',
                'updated_at' => '2019-12-26 07:07:02',
            ),
            62 => 
            array (
                'id' => 63,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 97,
                'locale' => 'ja',
                'value' => 'users',
                'created_at' => '2019-12-26 07:07:02',
                'updated_at' => '2019-12-26 07:07:02',
            ),
            63 => 
            array (
                'id' => 64,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 8,
                'locale' => 'ja',
                'value' => 'Mosque',
                'created_at' => '2019-12-26 07:07:03',
                'updated_at' => '2019-12-26 07:07:03',
            ),
            64 => 
            array (
                'id' => 65,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 8,
                'locale' => 'ja',
                'value' => 'Mosques',
                'created_at' => '2019-12-26 07:07:03',
                'updated_at' => '2019-12-26 07:07:03',
            ),
        ));
        
        
    }
}