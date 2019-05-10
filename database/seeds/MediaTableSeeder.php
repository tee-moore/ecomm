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
                'title'       => 'pharrell blue',
                'alt'         => 'pharrell blue',
                'url'         => '/adidas/adidas-originals-pharrell-williams-tennis-blue.jpg',
                'description' => '',
                'media_type'  => config('settings.media.type.image'),
                'parent_id'   => 1,
                'parent_type' => config('settings.media.parent.variation'),
            ],
            [
                'title'       => 'pharrell red',
                'alt'         => 'pharrell red',
                'url'         => '/adidas/adidas-originals-pharrell-williams-tennis-red.jpg',
                'description' => '',
                'media_type'  => config('settings.media.type.image'),
                'parent_id'   => 2,
                'parent_type' => config('settings.media.parent.variation'),
            ],
            [
                'title'       => 'yeezy orange',
                'alt'         => 'yeezy orange',
                'url'         => '/adidas/yeezy-boost-750-og-orange.png',
                'description' => '',
                'media_type'  => config('settings.media.type.image'),
                'parent_id'   => 3,
                'parent_type' => config('settings.media.parent.variation'),
            ],
            [
                'title'       => 'yeezy blue',
                'alt'         => 'yeezy blue',
                'url'         => '/adidas/yeezy-boost-750-og-blue.jpg',
                'description' => '',
                'media_type'  => config('settings.media.type.image'),
                'parent_id'   => 4,
                'parent_type' => config('settings.media.parent.variation'),
            ],
            [
                'title'       => 't_shirt blue',
                'alt'         => 't_shirt blue',
                'url'         => '/collins/t_shirt_blue.png',
                'description' => '',
                'media_type'  => config('settings.media.type.image'),
                'parent_id'   => 5,
                'parent_type' => config('settings.media.parent.variation'),
            ],
            [
                'title'       => 't_shirt blue',
                'alt'         => 't_shirt blue',
                'url'         => '/collins/t_shirt_blue.png',
                'description' => '',
                'media_type'  => config('settings.media.type.image'),
                'parent_id'   => 6,
                'parent_type' => config('settings.media.parent.variation'),
            ],
            [
                'title'       => 't_shirt red',
                'alt'         => 't_shirt red',
                'url'         => '/collins/t_shirt_red.png',
                'description' => '',
                'media_type'  => config('settings.media.type.image'),
                'parent_id'   => 7,
                'parent_type' => config('settings.media.parent.variation'),
            ],
            [
                'title'       => 't_shirt red',
                'alt'         => 't_shirt red',
                'url'         => '/collins/t_shirt_red.png',
                'description' => '',
                'media_type'  => config('settings.media.type.image'),
                'parent_id'   => 8,
                'parent_type' => config('settings.media.parent.variation'),
            ],
            [
                'title'       => 'shirt',
                'alt'         => 'shirt',
                'url'         => '/collins/shirt.jpg',
                'description' => '',
                'media_type'  => config('settings.media.type.image'),
                'parent_id'   => 4,
                'parent_type' => config('settings.media.parent.product'),
            ],
            [
                'title'       => 'nosky_muzhskye',
                'alt'         => 'nosky_muzhskye',
                'url'         => '/zhytomyrskye_nosky/zymnye_nosky_muzhskye_brawn1.jpg',
                'description' => '',
                'media_type'  => config('settings.media.type.image'),
                'parent_id'   => 5,
                'parent_type' => config('settings.media.parent.product'),
            ],
            [
                'title'       => 'konserva_nosok',
                'alt'         => 'konserva_nosok',
                'url'         => '/zhytomyrskye_nosky/konserva_nosok_girl_boss.jpg',
                'description' => '',
                'media_type'  => config('settings.media.type.image'),
                'parent_id'   => 6,
                'parent_type' => config('settings.media.parent.product'),
            ],
        ]);
    }
}
