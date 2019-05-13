<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MediaTableSeeder extends Seeder
{
    protected static $table = 'media';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table(self::$table)->insert([
            [
                'title'       => '',
                'alt'         => '',
                'url'         => '/adidas/adidas-originals-pharrell-williams-tennis-blue.jpg',
                'description' => '',
                'media_type'  => config('settings.media.type.image'),
            ],
            [
                'title'       => '',
                'alt'         => '',
                'url'         => '/adidas/adidas-originals-pharrell-williams-tennis-red.jpg',
                'description' => '',
                'media_type'  => config('settings.media.type.image'),
            ],
            [
                'title'       => '',
                'alt'         => '',
                'url'         => '/adidas/yeezy-boost-750-og-orange.png',
                'description' => '',
                'media_type'  => config('settings.media.type.image'),
            ],
            [
                'title'       => '',
                'alt'         => '',
                'url'         => '/adidas/yeezy-boost-750-og-blue.jpg',
                'description' => '',
                'media_type'  => config('settings.media.type.image'),
            ],
            [
                'title'       => '',
                'alt'         => '',
                'url'         => '/collins/t_shirt_blue.png',
                'description' => '',
                'media_type'  => config('settings.media.type.image'),
            ],
            [
                'title'       => '',
                'alt'         => '',
                'url'         => '/collins/t_shirt_red.png',
                'description' => '',
                'media_type'  => config('settings.media.type.image'),
            ],
            [
                'title'       => '',
                'alt'         => '',
                'url'         => '/collins/shirt.jpg',
                'description' => '',
                'media_type'  => config('settings.media.type.image'),
            ],
            [
                'title'       => '',
                'alt'         => '',
                'url'         => '/zhytomyrskye_nosky/zymnye_nosky_muzhskye_brawn1.jpg',
                'description' => '',
                'media_type'  => config('settings.media.type.image'),
            ],
            [
                'title'       => '',
                'alt'         => '',
                'url'         => '/zhytomyrskye_nosky/konserva_nosok_girl_boss.jpg',
                'description' => '',
                'media_type'  => config('settings.media.type.image'),
            ],
        ]);
    }
}
