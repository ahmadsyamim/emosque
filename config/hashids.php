<?php

/*
 * This file is part of Laravel Hashids.
 *
 * (c) Vincent Klaiber <hello@doubledip.se>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

return [

    /*
    |--------------------------------------------------------------------------
    | Default Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the connections below you wish to use as
    | your default connection for all work. Of course, you may use many
    | connections at once using the manager class.
    |
    */

    'default' => 'main',

    /*
    |--------------------------------------------------------------------------
    | Hashids Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the connections setup for your application. Example
    | configuration has been included, but you may add as many connections as
    | you would like.
    |
    */

    'connections' => [

        'main' => [
            'salt' => 'SNt_CMUP*&cNhZtU%z@feQuF^UU#9Yurdc!5ef9RTAxt_5_gX7=G-aGvvEK_4?jfj%HnV#$AUA@fJkkSdjR_d57AbvaQx9tM@Mf#CEqWXLJ&@?krW*$!=hBJ$5j9=W_R7Q6S3_JXyYtt%tQu3k?FJ&kx8=3hUP+VzM@Utf5t24CQXJy9f+8T5U9gVs&J^SP4peHzSya^52ADmvU8*p-!rLXskt!w*&H^Qg6v=xwkgep+3V4y%w233bUTRBxVPVaJ',
            'length' => '20',
        ],

        'alternative' => [
            'salt' => 'X*DTt+S*jPFPAyKSHjdrWH!k9F=kF_aXhVC?+@2^mLD9TDs&qsut=%PWa3+Lw?f-H92ydyeH^hHs&J^mVa+xt2wPagr8Ag4Mv=6+VV7^w7brTqEnDyG4rfu2DyeC4ue=AJ9=JxxTm3aBMR*axCSTmGYb^X_5A?k5fQdDtUAFSbdF9f8je-va&tnKgTeXnuhg5F9K%Vc4LmtMbM&#3*M#3y8NphQUDqnR9vGBqTh3XcQ29ztWUbrb=BFgs$DKw3kr',
            'length' => '40',
        ],

    ],

];
