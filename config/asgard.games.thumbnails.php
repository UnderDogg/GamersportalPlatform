<?php

return [
    'gamesThumb' => [
        'fit' => [
            'width' => '150',
            'height' => '150',
            'callback' => function ($constraint) {
                $constraint->upsize();
            }
        ],
    ]
];
