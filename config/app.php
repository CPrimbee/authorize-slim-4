<?php

return [
  'name' => env('APP_NAME', 'Slim 4 Auth App'),

  'env' => env('APP_ENV', 'production'),

  'app_debug' => env('APP_DEBUG', false),

  'url' => env('APP_URL', 'http://localhost:8000'),

  'timezone' => 'UTC',

  'locale' => 'en',

  'faker_locale' => 'en_US',

  'providers' => [
    /** Booted Foundation Service Providers... */
    \Boot\Foundation\Providers\FileSystemServiceProvider::class,
    \Boot\Foundation\Providers\TranslatorServiceProvider::class,
    \Boot\Foundation\Providers\ValidatorServiceProvider::class,

    /** App Service Providers... */
    \App\Providers\DatabaseServiceProvider::class,
    \App\Providers\BladeServiceProvider::class,
  ],
  'aliases' => [
    'Auth' => App\Support\Auth::class,
    'DB' => Illuminate\Database\Capsule\Manager::class,
  ]
];
