<?php

return [

    'product' => [

        'image' => [
            'folder'  => 'storage/images/products/',
            'default' => 'default.png',
        ],

        'type' => [
            'simple'   => 0,
            'variable' => 1,
        ],

        'active' => [
            'false' => 0,
            'true'  => 1,
        ],

        'status' => [
            'published' => 0,
            'review'    => 1,
            'draft'     => 2,
        ],

    ],

    'user' => [

        'image' => [
            'folder'  => 'storage/images/users/',
            'default' => 'default.png',
        ],

    ],

    'media' => [

        'type' => [
            'image' => 0,
            'video' => 1,
        ],

    ],

    'taxonomy' => [

        'type' => [
            'category' => 0,
            'tag'      => 1,
        ],
        
    ],

];