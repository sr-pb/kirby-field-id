<?php

use Kirby\Uuid\Uuid;

Kirby::plugin('sr/generate-id', [
    'fields' => [
        'customid' => [
            'extends' => 'text',
            'props' => [
                'value' => function (string $value = null) {
                    if($value == '' || $value == null) {
                        // $uuid = Uuid::generate();
                        $value = Uuid::generate();

                        return $value;
                    }
                    return $value;
                },

            ]
        ]
    ]
]);
