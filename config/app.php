<?php

return [

  /*
  |--------------------------------------------------------------------------
  | Application Name
  |--------------------------------------------------------------------------
  |
  | This value is the name of your application. This value is used when the
  | framework needs to place the application's name in a notification or
  | any other location as required by the application or its packages.
  |
  */

  'name' => env('APP_NAME', 'modulusPHP'),

  /*
  |--------------------------------------------------------------------------
  | Application Root
  |--------------------------------------------------------------------------
  |
  | This value is the root of your application. This value is used when the
  | framework needs to boot up.
  |
  */

  'root' => env('APP_ROOT', DS . 'public'),

  'dir' => substr(__DIR__, 0, strrpos(__DIR__, DS)) . DS,

  /*
  |--------------------------------------------------------------------------
  | Application Environment
  |--------------------------------------------------------------------------
  |
  | This value determines the "environment" your application is currently
  | running in. This may determine how you prefer to configure various
  | services your application utilizes. Set this in your ".env" file.
  |
  */

  'env' => env('APP_ENV', 'production'),

  /*
  |--------------------------------------------------------------------------
  | Application Debug Mode
  |--------------------------------------------------------------------------
  |
  | When your application is in debug mode, detailed error messages with
  | stack traces will be shown on every error that occurs within your
  | application. If disabled, a simple generic error page is shown.
  |
  */

  'debug' => env('APP_DEBUG', false),

  /*
  |--------------------------------------------------------------------------
  | Application URL
  |--------------------------------------------------------------------------
  |
  | This URL is used by the console to properly generate URLs when using
  | the Craftsman command line tool. You should set this to the root of
  | your application so that it is used when running Craftsman tasks.
  |
  */

  'url' => env('APP_URL', 'http://localhost'),

  /*
  |--------------------------------------------------------------------------
  | Encryption Key
  |--------------------------------------------------------------------------
  |
  | This key is used by the API Authorization access tokens and should be set
  | to a random, 32 - 36 character string.
  |
  | Please do this before deploying an application!
  |
  */
  'key' => env('APP_KEY'),

  /*
  |
  |--------------------------------------------------------------------------
  | Application Logger
  |--------------------------------------------------------------------------
  |
  | Here you may configure the log settings for your application.
  |
  | Logger Settings:
  | name: the prefix or name of the log
  | log: "single", "daily", "monthly"
  | keep: the number of days a daily log is kept.
  |
  */

  'logger' => [
    'name' => env('APP_LOG_NAME', 'modulus'),
    'log' => env('APP_LOG', 'single'),
    'keep' => env('APP_LOG_KEEP', 5),
  ],

  /*
  |--------------------------------------------------------------------------
  | Class Aliases
  |--------------------------------------------------------------------------
  |
  | This array of class aliases will be registered when this application
  | is started. However, feel free to register as many as you wish as
  | the aliases are "lazy" loaded so they don't hinder performance.
  |
  */

  'aliases' => [
    'Auth' => Modulus\Security\Auth::class,
    'DB' => Illuminate\Database\Capsule\Manager::class,
    'Events' => Modulus\Utility\Events::class,
    'Get' => Modulus\Http\Get::class,
    'Hash' => Modulus\Security\Hash::class,
    'Log' => AtlantisPHP\Telemonlog\Output::class,
    'Mail' => Modulus\Utility\Mail::class,
    'Session' => Modulus\Http\Session::class,
    'Status' => Modulus\Http\Status::class,
    'Rest' => Modulus\Http\Rest::class,
    'Redirect' => Modulus\Http\Redirect::class,
    'Request' => Modulus\Http\Request::class,
    'Route' => AtlantisPHP\Swish\Route::class,
    'Validate' => Modulus\Utility\Validate::class,
    'Variable' => Modulus\Utility\Variable::class,
    'View' => Modulus\Utility\View::class,
  ],
];