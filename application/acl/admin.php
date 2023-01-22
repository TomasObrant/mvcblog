<?php

return [
	'all' => [
		'login',
	],
	'authorize' => [
		//
	],
	'guest' => [
		//
	],
	'admin' => [
        'index',
        'logout',

        'post',
        'create',
        'edit',
        'delete',
		'post/create',
        'post/edit',
        'post/delete',

        'user',
		'user/create',
		'user/edit',
		'user/delete',

        'product',
        'product/create',
        'product/edit',
        'product/delete',
	],
];