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
                'media_id'         => 1,
                'attached_to_id'   => 1,
                'attached_to_type' => 'variation',
            ],
            [
                'media_id'         => 2,
                'attached_to_id'   => 2,
                'attached_to_type' => 'variation',
            ],
            [
                'media_id'         => 3,
                'attached_to_id'   => 3,
                'attached_to_type' => 'variation',
            ],
            [
                'media_id'         => 4,
                'attached_to_id'   => 4,
                'attached_to_type' => 'variation',
            ],
            [
                'media_id'         => 5,
                'attached_to_id'   => 5,
                'attached_to_type' => 'variation',
            ],
            [
                'media_id'         => 5,
                'attached_to_id'   => 6,
                'attached_to_type' => 'variation',
            ],
            [
                'media_id'         => 6,
                'attached_to_id'   => 7,
                'attached_to_type' => 'variation',
            ],
            [
                'media_id'         => 6,
                'attached_to_id'   => 8,
                'attached_to_type' => 'variation',
            ],
            [
                'media_id'         => 7,
                'attached_to_id'   => 4,
                'attached_to_type' => 'product',
            ],
            [
                'media_id'         => 8,
                'attached_to_id'   => 5,
                'attached_to_type' => 'product',
            ],
            [
                'media_id'         => 9,
                'attached_to_id'   => 6,
                'attached_to_type' => 'product',
            ],
        ]);
    }
}
