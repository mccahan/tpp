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
    'linkedin' => [
        'client_id' => env('LK_CLIENT'),
        'client_secret' => env('LK_SECRET'),
        'redirect' => env('LK_REDIRECT')
    ],
    'mailchimp' => [
        'client_id' => env('MC_CLIENT'),
        'client_secret' => env('MC_SECRET'),
        'redirect' => env('MC_REDIRECT'),  
    ],

];
