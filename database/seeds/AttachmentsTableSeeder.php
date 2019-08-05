<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttachmentsTableSeeder extends Seeder
{
    protected static $table = 'attachments';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table(self::$table)->insert([
            [
                'media_id'         => 2,
                'attached_to_id'   => 1,
                'attached_to_type' => 'product',
                'main'             => true,
                'hover'            => false,
                'order'            => 1,
                'options'          => '{"shop": {"type": "main"},"product": {"order": 1}}',
            ],
            [
                'media_id'         => 1,
                'attached_to_id'   => 2,
                'attached_to_type' => 'product',
                'main'             => true,
                'hover'            => false,
                'order'            => 1,
                'options'          => '{"shop": {"type": "main"},"product": {"order": 1}}',
            ],
            [
                'media_id'         => 4,
                'attached_to_id'   => 3,
                'attached_to_type' => 'product',
                'main'             => true,
                'hover'            => false,
                'order'            => 1,
                'options'          => '{"shop": {"type": "main"},"product": {"order": 1}}',
            ],
            [
                'media_id'         => 5,
                'attached_to_id'   => 3,
                'attached_to_type' => 'product',
                'main'             => false,
                'hover'            => true,
                'order'            => 2,
                'options'          => '{"shop": {"type": "hover"},"product": {"order": 2}}',
            ],
            [
                'media_id'         => 5,
                'attached_to_id'   => 4,
                'attached_to_type' => 'product',
                'main'             => true,
                'hover'            => false,
                'order'            => 1,
                'options'          => '{"shop": {"type": "main"},"product": {"order": 1}}',
            ],
            [
                'media_id'         => 5,
                'attached_to_id'   => 4,
                'attached_to_type' => 'product',
                'main'             => false,
                'hover'            => true,
                'order'            => 2,
                'options'          => '{"product": {"order": 2}}',
            ],
            [
                'media_id'         => 6,
                'attached_to_id'   => 5,
                'attached_to_type' => 'product',
                'main'             => true,
                'hover'            => false,
                'order'            => 1,
                'options'          => '{"shop": {"type": "main"},"product": {"order": 1}}',
            ],
            [
                'media_id'         => 5,
                'attached_to_id'   => 5,
                'attached_to_type' => 'product',
                'main'             => false,
                'hover'            => true,
                'order'            => 2,
                'options'          => '{"product": {"order": 2}}',
            ],
            [
                'media_id'         => 7,
                'attached_to_id'   => 6,
                'attached_to_type' => 'product',
                'main'             => true,
                'hover'            => false,
                'order'            => 1,
                'options'          => '{"shop": {"type": "main"},"product": {"order": 1}}',
            ],
            [
                'media_id'         => 6,
                'attached_to_id'   => 6,
                'attached_to_type' => 'product',
                'main'             => false,
                'hover'            => true,
                'order'            => 2,
                'options'          => '{"shop": {"type": "hover"},"product": {"order": 2}}',
            ],
        ]);
    }
}
