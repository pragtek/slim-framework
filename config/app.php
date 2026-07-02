<?php

return [
    'name' => env('APP_NAME', 'Slim 4 Auth App'),
    'providers' => [
		\App\Providers\TranslatorServiceProvider::class,
		\App\Providers\ValidatorServiceProvider::class,
        \App\Providers\DatabaseServiceProvider::class,
        \App\Providers\BladeServiceProvider::class,
        \App\Providers\RouteServiceProvider::class
    ],
    'aliases' => [
		'Auth' => \App\Support\Auth::class,
        'DB' => \Illuminate\Database\Capsule\Manager::class,
    ],
	'locale' => 'en',
];
