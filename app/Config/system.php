<?php

/**
 * Custom system config — merged into Bagisto's system config via AppServiceProvider.
 * Adds admin UI settings for QR payment methods (PayMe, FPS, PayPal).
 */
return [

    // ─── PayMe ───────────────────────────────────────────────────────────────
    [
        'key'  => 'sales.payment_methods.payme',
        'name' => 'PayMe',
        'info' => 'PayMe QR code 付款',
        'sort' => 8,
        'fields' => [
            [
                'name'          => 'active',
                'title'         => 'admin::app.configuration.index.sales.payment-methods.status',
                'type'          => 'boolean',
                'channel_based' => true,
                'locale_based'  => false,
            ], [
                'name'          => 'title',
                'title'         => 'admin::app.configuration.index.sales.payment-methods.title',
                'type'          => 'text',
                'depends'       => 'active:1',
                'validation'    => 'required_if:active,1',
                'channel_based' => true,
                'locale_based'  => true,
            ], [
                'name'          => 'description',
                'title'         => 'admin::app.configuration.index.sales.payment-methods.description',
                'type'          => 'textarea',
                'depends'       => 'active:1',
                'channel_based' => true,
                'locale_based'  => true,
            ], [
                'name'          => 'image',
                'title'         => 'QR Code 圖片',
                'type'          => 'image',
                'info'          => '上傳你的 PayMe QR code 圖片（建議尺寸：400×400px）',
                'depends'       => 'active:1',
                'channel_based' => true,
                'locale_based'  => false,
                'validation'    => 'mimes:jpeg,jpg,png,webp',
            ], [
                'name'          => 'instructions',
                'title'         => 'admin::app.configuration.index.sales.payment-methods.instructions',
                'type'          => 'textarea',
                'depends'       => 'active:1',
                'channel_based' => true,
                'locale_based'  => true,
            ], [
                'name'          => 'sort',
                'title'         => 'admin::app.configuration.index.sales.payment-methods.sort',
                'type'          => 'number',
                'channel_based' => false,
                'locale_based'  => false,
            ],
        ],
    ],

    // ─── FPS 轉數快 ──────────────────────────────────────────────────────────
    [
        'key'  => 'sales.payment_methods.fps',
        'name' => 'FPS 轉數快',
        'info' => 'FPS 轉數快 QR code 付款',
        'sort' => 9,
        'fields' => [
            [
                'name'          => 'active',
                'title'         => 'admin::app.configuration.index.sales.payment-methods.status',
                'type'          => 'boolean',
                'channel_based' => true,
                'locale_based'  => false,
            ], [
                'name'          => 'title',
                'title'         => 'admin::app.configuration.index.sales.payment-methods.title',
                'type'          => 'text',
                'depends'       => 'active:1',
                'validation'    => 'required_if:active,1',
                'channel_based' => true,
                'locale_based'  => true,
            ], [
                'name'          => 'description',
                'title'         => 'admin::app.configuration.index.sales.payment-methods.description',
                'type'          => 'textarea',
                'depends'       => 'active:1',
                'channel_based' => true,
                'locale_based'  => true,
            ], [
                'name'          => 'image',
                'title'         => 'QR Code 圖片',
                'type'          => 'image',
                'info'          => '上傳你的 FPS 轉數快 QR code 圖片（建議尺寸：400×400px）',
                'depends'       => 'active:1',
                'channel_based' => true,
                'locale_based'  => false,
                'validation'    => 'mimes:jpeg,jpg,png,webp',
            ], [
                'name'          => 'instructions',
                'title'         => 'admin::app.configuration.index.sales.payment-methods.instructions',
                'type'          => 'textarea',
                'depends'       => 'active:1',
                'channel_based' => true,
                'locale_based'  => true,
            ], [
                'name'          => 'sort',
                'title'         => 'admin::app.configuration.index.sales.payment-methods.sort',
                'type'          => 'number',
                'channel_based' => false,
                'locale_based'  => false,
            ],
        ],
    ],

    // ─── PayPal QR ───────────────────────────────────────────────────────────
    [
        'key'  => 'sales.payment_methods.paypalqr',
        'name' => 'PayPal',
        'info' => 'PayPal QR code 付款',
        'sort' => 10,
        'fields' => [
            [
                'name'          => 'active',
                'title'         => 'admin::app.configuration.index.sales.payment-methods.status',
                'type'          => 'boolean',
                'channel_based' => true,
                'locale_based'  => false,
            ], [
                'name'          => 'title',
                'title'         => 'admin::app.configuration.index.sales.payment-methods.title',
                'type'          => 'text',
                'depends'       => 'active:1',
                'validation'    => 'required_if:active,1',
                'channel_based' => true,
                'locale_based'  => true,
            ], [
                'name'          => 'description',
                'title'         => 'admin::app.configuration.index.sales.payment-methods.description',
                'type'          => 'textarea',
                'depends'       => 'active:1',
                'channel_based' => true,
                'locale_based'  => true,
            ], [
                'name'          => 'image',
                'title'         => 'QR Code 圖片',
                'type'          => 'image',
                'info'          => '上傳你的 PayPal QR code 圖片（建議尺寸：400×400px）',
                'depends'       => 'active:1',
                'channel_based' => true,
                'locale_based'  => false,
                'validation'    => 'mimes:jpeg,jpg,png,webp',
            ], [
                'name'          => 'instructions',
                'title'         => 'admin::app.configuration.index.sales.payment-methods.instructions',
                'type'          => 'textarea',
                'depends'       => 'active:1',
                'channel_based' => true,
                'locale_based'  => true,
            ], [
                'name'          => 'sort',
                'title'         => 'admin::app.configuration.index.sales.payment-methods.sort',
                'type'          => 'number',
                'channel_based' => false,
                'locale_based'  => false,
            ],
        ],
    ],

];
