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
                'title'       => 'Default',
                'alt'         => 'Default',
                'url'         => 'default.png',
                'description' => 'default product image',
                'type'        => config('settings.media.type.image'),
                'parent_id'   => 1,
                'parent_type' => 1,
            ],
            [
                'title'       => '',
                'alt'         => '',
                'url'         => 'adidas/adidas-originals-pharrell-williams-tennis-blue.jpg',
                'description' => '',
                'type'        => config('settings.media.type.image'),
                'parent_id'   => 2,
                'parent_type' => 1,
            ],
            [
                'title'       => '',
                'alt'         => '',
                'url'         => 'adidas/adidas-originals-pharrell-williams-tennis-red.jpg',
                'description' => '',
                'type'        => config('settings.media.type.image'),
                'parent_id'   => 3,
                'parent_type' => 1,
            ],
            [
                'title'       => '',
                'alt'         => '',
                'url'         => 'adidas/yeezy-boost-750-og-orange.png',
                'description' => '',
                'type'        => config('settings.media.type.image'),
                'parent_id'   => 4,
                'parent_type' => 1,
            ],
            [
                'title'       => '',
                'alt'         => '',
                'url'         => 'adidas/yeezy-boost-750-og-blue.jpg',
                'description' => '',
                'type'        => config('settings.media.type.image'),
                'parent_id'   => 5,
                'parent_type' => 1,
            ],
            [
                'title'       => '',
                'alt'         => '',
                'url'         => 'collins/t_shirt_blue.png',
                'description' => '',
                'type'        => config('settings.media.type.image'),
                'parent_id'   => 6,
                'parent_type' => 1,
            ],
            [
                'title'       => '',
                'alt'         => '',
                'url'         => 'collins/t_shirt_red.jpg',
                'description' => '',
                'type'        => config('settings.media.type.image'),
                'parent_id'   => 1,
                'parent_type' => 1,
            ],
            [
                'title'       => '',
                'alt'         => '',
                'url'         => 'collins/shirt.jpg',
                'description' => '',
                'type'        => config('settings.media.type.image'),
                'parent_id'   => 2,
                'parent_type' => 1,
            ],
            [
                'title'       => '',
                'alt'         => '',
                'url'         => 'zhytomyrskye_nosky/zymnye_nosky_muzhskye_brawn1.jpg',
                'description' => '',
                'type'        => config('settings.media.type.image'),
                'parent_id'   => 3,
                'parent_type' => 1,
            ],
            [
                'title'       => '',
                'alt'         => '',
                'url'         => 'zhytomyrskye_nosky/konserva_nosok_girl_boss.jpg',
                'description' => '',
                'type'        => config('settings.media.type.image'),
                'parent_id'   => 4,
                'parent_type' => 1,
            ],
        ]);
    }
}
