<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => '',
        'secret' => '',
    ],

    'mandrill' => [
        'secret' => '',
    ],

    'ses' => [
        'key'    => '',
        'secret' => '',
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => App\User::class,
        'key'    => '',
        'secret' => '',
    ],
    'linkedinfull' => [
        'client_id' => getenv('LK_CLIENT'),
        'client_secret' => getenv('LK_SECRET'),
        'redirect' => getenv('LK_REDIRECT')
    ],
    'mailchimp' => [
        'client_id' => env('MAILCHIMP_KEY'),
        'client_secret' => env('MAILCHIMP_SECRET'),
        'redirect' => env('MAILCHIMP_REDIRECT_URI'),  
    ]
];
