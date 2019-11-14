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
                'column_name' => 'display_name_singular',
                'created_at' => '2019-11-13 14:15:35',
                'foreign_key' => 5,
                'id' => 1,
                'locale' => 'pt',
                'table_name' => 'data_types',
                'updated_at' => '2019-11-13 14:15:35',
                'value' => 'Post',
            ),
            1 => 
            array (
                'column_name' => 'display_name_singular',
                'created_at' => '2019-11-13 14:15:35',
                'foreign_key' => 6,
                'id' => 2,
                'locale' => 'pt',
                'table_name' => 'data_types',
                'updated_at' => '2019-11-13 14:15:35',
                'value' => 'Página',
            ),
            2 => 
            array (
                'column_name' => 'display_name_singular',
                'created_at' => '2019-11-13 14:15:35',
                'foreign_key' => 1,
                'id' => 3,
                'locale' => 'pt',
                'table_name' => 'data_types',
                'updated_at' => '2019-11-13 14:15:35',
                'value' => 'Utilizador',
            ),
            3 => 
            array (
                'column_name' => 'display_name_singular',
                'created_at' => '2019-11-13 14:15:35',
                'foreign_key' => 4,
                'id' => 4,
                'locale' => 'pt',
                'table_name' => 'data_types',
                'updated_at' => '2019-11-13 14:15:35',
                'value' => 'Categoria',
            ),
            4 => 
            array (
                'column_name' => 'display_name_singular',
                'created_at' => '2019-11-13 14:15:35',
                'foreign_key' => 2,
                'id' => 5,
                'locale' => 'pt',
                'table_name' => 'data_types',
                'updated_at' => '2019-11-13 14:15:35',
                'value' => 'Menu',
            ),
            5 => 
            array (
                'column_name' => 'display_name_singular',
                'created_at' => '2019-11-13 14:15:35',
                'foreign_key' => 3,
                'id' => 6,
                'locale' => 'pt',
                'table_name' => 'data_types',
                'updated_at' => '2019-11-13 14:15:35',
                'value' => 'Função',
            ),
            6 => 
            array (
                'column_name' => 'display_name_plural',
                'created_at' => '2019-11-13 14:15:35',
                'foreign_key' => 5,
                'id' => 7,
                'locale' => 'pt',
                'table_name' => 'data_types',
                'updated_at' => '2019-11-13 14:15:35',
                'value' => 'Posts',
            ),
            7 => 
            array (
                'column_name' => 'display_name_plural',
                'created_at' => '2019-11-13 14:15:35',
                'foreign_key' => 6,
                'id' => 8,
                'locale' => 'pt',
                'table_name' => 'data_types',
                'updated_at' => '2019-11-13 14:15:35',
                'value' => 'Páginas',
            ),
            8 => 
            array (
                'column_name' => 'display_name_plural',
                'created_at' => '2019-11-13 14:15:35',
                'foreign_key' => 1,
                'id' => 9,
                'locale' => 'pt',
                'table_name' => 'data_types',
                'updated_at' => '2019-11-13 14:15:35',
                'value' => 'Utilizadores',
            ),
            9 => 
            array (
                'column_name' => 'display_name_plural',
                'created_at' => '2019-11-13 14:15:35',
                'foreign_key' => 4,
                'id' => 10,
                'locale' => 'pt',
                'table_name' => 'data_types',
                'updated_at' => '2019-11-13 14:15:35',
                'value' => 'Categorias',
            ),
            10 => 
            array (
                'column_name' => 'display_name_plural',
                'created_at' => '2019-11-13 14:15:35',
                'foreign_key' => 2,
                'id' => 11,
                'locale' => 'pt',
                'table_name' => 'data_types',
                'updated_at' => '2019-11-13 14:15:35',
                'value' => 'Menus',
            ),
            11 => 
            array (
                'column_name' => 'display_name_plural',
                'created_at' => '2019-11-13 14:15:35',
                'foreign_key' => 3,
                'id' => 12,
                'locale' => 'pt',
                'table_name' => 'data_types',
                'updated_at' => '2019-11-13 14:15:35',
                'value' => 'Funções',
            ),
            12 => 
            array (
                'column_name' => 'slug',
                'created_at' => '2019-11-13 14:15:35',
                'foreign_key' => 1,
                'id' => 13,
                'locale' => 'pt',
                'table_name' => 'categories',
                'updated_at' => '2019-11-13 14:15:35',
                'value' => 'categoria-1',
            ),
            13 => 
            array (
                'column_name' => 'name',
                'created_at' => '2019-11-13 14:15:35',
                'foreign_key' => 1,
                'id' => 14,
                'locale' => 'pt',
                'table_name' => 'categories',
                'updated_at' => '2019-11-13 14:15:35',
                'value' => 'Categoria 1',
            ),
            14 => 
            array (
                'column_name' => 'slug',
                'created_at' => '2019-11-13 14:15:35',
                'foreign_key' => 2,
                'id' => 15,
                'locale' => 'pt',
                'table_name' => 'categories',
                'updated_at' => '2019-11-13 14:15:35',
                'value' => 'categoria-2',
            ),
            15 => 
            array (
                'column_name' => 'name',
                'created_at' => '2019-11-13 14:15:35',
                'foreign_key' => 2,
                'id' => 16,
                'locale' => 'pt',
                'table_name' => 'categories',
                'updated_at' => '2019-11-13 14:15:35',
                'value' => 'Categoria 2',
            ),
            16 => 
            array (
                'column_name' => 'title',
                'created_at' => '2019-11-13 14:15:35',
                'foreign_key' => 1,
                'id' => 17,
                'locale' => 'pt',
                'table_name' => 'pages',
                'updated_at' => '2019-11-13 14:15:35',
                'value' => 'Olá Mundo',
            ),
            17 => 
            array (
                'column_name' => 'slug',
                'created_at' => '2019-11-13 14:15:35',
                'foreign_key' => 1,
                'id' => 18,
                'locale' => 'pt',
                'table_name' => 'pages',
                'updated_at' => '2019-11-13 14:15:35',
                'value' => 'ola-mundo',
            ),
            18 => 
            array (
                'column_name' => 'body',
                'created_at' => '2019-11-13 14:15:35',
                'foreign_key' => 1,
                'id' => 19,
                'locale' => 'pt',
                'table_name' => 'pages',
                'updated_at' => '2019-11-13 14:15:35',
                'value' => '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>
<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>',
            ),
            19 => 
            array (
                'column_name' => 'title',
                'created_at' => '2019-11-13 14:15:35',
                'foreign_key' => 1,
                'id' => 20,
                'locale' => 'pt',
                'table_name' => 'menu_items',
                'updated_at' => '2019-11-13 14:15:35',
                'value' => 'Painel de Controle',
            ),
            20 => 
            array (
                'column_name' => 'title',
                'created_at' => '2019-11-13 14:15:35',
                'foreign_key' => 2,
                'id' => 21,
                'locale' => 'pt',
                'table_name' => 'menu_items',
                'updated_at' => '2019-11-13 14:15:35',
                'value' => 'Media',
            ),
            21 => 
            array (
                'column_name' => 'title',
                'created_at' => '2019-11-13 14:15:35',
                'foreign_key' => 12,
                'id' => 22,
                'locale' => 'pt',
                'table_name' => 'menu_items',
                'updated_at' => '2019-11-13 14:15:35',
                'value' => 'Publicações',
            ),
            22 => 
            array (
                'column_name' => 'title',
                'created_at' => '2019-11-13 14:15:35',
                'foreign_key' => 3,
                'id' => 23,
                'locale' => 'pt',
                'table_name' => 'menu_items',
                'updated_at' => '2019-11-13 14:15:35',
                'value' => 'Utilizadores',
            ),
            23 => 
            array (
                'column_name' => 'title',
                'created_at' => '2019-11-13 14:15:35',
                'foreign_key' => 11,
                'id' => 24,
                'locale' => 'pt',
                'table_name' => 'menu_items',
                'updated_at' => '2019-11-13 14:15:35',
                'value' => 'Categorias',
            ),
            24 => 
            array (
                'column_name' => 'title',
                'created_at' => '2019-11-13 14:15:35',
                'foreign_key' => 13,
                'id' => 25,
                'locale' => 'pt',
                'table_name' => 'menu_items',
                'updated_at' => '2019-11-13 14:15:35',
                'value' => 'Páginas',
            ),
            25 => 
            array (
                'column_name' => 'title',
                'created_at' => '2019-11-13 14:15:35',
                'foreign_key' => 4,
                'id' => 26,
                'locale' => 'pt',
                'table_name' => 'menu_items',
                'updated_at' => '2019-11-13 14:15:35',
                'value' => 'Funções',
            ),
            26 => 
            array (
                'column_name' => 'title',
                'created_at' => '2019-11-13 14:15:35',
                'foreign_key' => 5,
                'id' => 27,
                'locale' => 'pt',
                'table_name' => 'menu_items',
                'updated_at' => '2019-11-13 14:15:35',
                'value' => 'Ferramentas',
            ),
            27 => 
            array (
                'column_name' => 'title',
                'created_at' => '2019-11-13 14:15:35',
                'foreign_key' => 6,
                'id' => 28,
                'locale' => 'pt',
                'table_name' => 'menu_items',
                'updated_at' => '2019-11-13 14:15:35',
                'value' => 'Menus',
            ),
            28 => 
            array (
                'column_name' => 'title',
                'created_at' => '2019-11-13 14:15:35',
                'foreign_key' => 7,
                'id' => 29,
                'locale' => 'pt',
                'table_name' => 'menu_items',
                'updated_at' => '2019-11-13 14:15:35',
                'value' => 'Base de dados',
            ),
            29 => 
            array (
                'column_name' => 'title',
                'created_at' => '2019-11-13 14:15:35',
                'foreign_key' => 10,
                'id' => 30,
                'locale' => 'pt',
                'table_name' => 'menu_items',
                'updated_at' => '2019-11-13 14:15:35',
                'value' => 'Configurações',
            ),
        ));
        
        
    }
}