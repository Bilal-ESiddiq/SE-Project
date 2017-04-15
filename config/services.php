<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'google'=> [
        'client_id' => '1034129160614-1fta3hl3vdiupmflkv95adk64vj7sobn.apps.googleusercontent.com',
        'client_secret' => 'zgcYbay1j4eZV3KLLedQph4v',
        'redirect' => 'http://localhost:8000/auth/google/callback',

    ],
    'facebook'=> [
        'client_id' => '873735509432545',
        'client_secret' => '56957695c592e3f80e92417c295c153b',
        'redirect' => 'http://localhost:8000/auth/facebook/callback',

    ],
];
