<?php
	return [
		/*
		|--------------------------------------------------------------------------
		| Redis Databases
		|--------------------------------------------------------------------------
		|
		| Redis is an open source, fast, and advanced key-value store that also
		| provides a richer set of commands than a typical key-value systems
		| such as APC or Memcached. Laravel makes it easy to dig right in.
		|
		*/
		'redis' => [
			'cluster' => false,
			'client' => 'phpredis',
			'default' => [
				'host' => env('REDIS_HOST', 'redis'),
				'password' => env('REDIS_PASSWORD', null),
				'port' => env('REDIS_PORT', 6379),
				'database' => 0,
			],
		],
	];
