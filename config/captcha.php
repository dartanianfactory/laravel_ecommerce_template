<?php

return [
    'disable' => env('CAPTCHA_DISABLE', false),
    'characters' => ['2', '3', '4', '6', '7', '8', '9', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'K', 'M', 'N', 'P', 'Q', 'R', 'T', 'U', 'X', 'Y', 'Z'],
    'default' => [
        'length' => 5,
        'width' => 120,
        'height' => 40,
        'quality' => 100,
        'math' => false,
        'expire' => 600,
        'encrypt' => false,
        'lines' => 3,
        'bgImage' => false,
        'bgColor' => '#ffffff',
        'contrast' => 0,
    ],
    'flat' => [
        'length' => 6,
        'width' => 160,
        'height' => 46,
        'quality' => 100,
        'lines' => 0,
        'bgImage' => false,
        'bgColor' => '#ecf2f4',
        'fontColors' => ['#2c3e50'],
        'contrast' => 0,
    ],
    'mini' => [
        'length' => 3,
        'width' => 80,
        'height' => 32,
        'quality' => 100,
    ],
    'inverse' => [
        'length' => 5,
        'width' => 120,
        'height' => 36,
        'quality' => 100,
        'sensitive' => false,
        'angle' => 0,
        'sharpen' => 0,
        'blur' => 0,
        'invert' => false,
        'contrast' => 0,
    ]
];