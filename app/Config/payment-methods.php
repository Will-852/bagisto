<?php

use App\Payment\FPS;
use App\Payment\PayMe;
use App\Payment\PayPalQr;

return [
    'payme' => [
        'class'            => PayMe::class,
        'code'             => 'payme',
        'title'            => 'PayMe',
        'description'      => '掃描 QR code 以 PayMe 付款',
        'active'           => true,
        'generate_invoice' => false,
        'sort'             => 8,
    ],

    'fps' => [
        'class'            => FPS::class,
        'code'             => 'fps',
        'title'            => 'FPS 轉數快',
        'description'      => '掃描 QR code 以轉數快付款',
        'active'           => true,
        'generate_invoice' => false,
        'sort'             => 9,
    ],

    'paypalqr' => [
        'class'            => PayPalQr::class,
        'code'             => 'paypalqr',
        'title'            => 'PayPal',
        'description'      => '掃描 QR code 以 PayPal 付款',
        'active'           => true,
        'generate_invoice' => false,
        'sort'             => 10,
    ],
];
