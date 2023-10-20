<?php

use Kirby\Uuid\Uuid;

Kirby::plugin('sr/field-id', [
    'fields' => [
        'fieldid' => [
            'extends' => 'text',
            'props' => [
                'value' => function (string $value = '') {
                    if($value == '' || $value == null) {
                        $value = Uuid::generate();
                    }
                    return $value;
                },
                'disabled' => function (bool $disabled = true) {
                    return $disabled;
                },

                'placeholder' => function (string $placeholder = '') {
                    $placeholder = 'An ID will be generated';
                    return $placeholder;
                }

            ]
        ]
    ]
]);
