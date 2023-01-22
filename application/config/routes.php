<?php

//return [
//
//    // Main
//
//	'main' => [
//        '' => [
//            'controller' => 'main',
//            'action' => 'index'
//        ],
//        'shop' => [
//            'controller' => 'main',
//            'action' => 'shop'
//        ],
//        'shop/product/' => [
//            'controller' => 'main',
//            'action' => 'product'
//        ],
//        'about' => [
//            'controller' => 'main',
//            'action' => 'about'
//        ],
//        'blog' => [
//            'controller' => 'main',
//            'action' => 'blog'
//        ],
//        'blog/post/{id:\d+}' => [
//            'controller' => 'main',
//            'action' => 'post'
//        ],
//        'pages' => [
//            'controller' => 'main',
//            'action' => 'pages'
//        ],
//        'contact' => [
//            'controller' => 'main',
//            'action' => 'contact'
//        ],
//    ],
//
//	// Admin
//
//    'admin' => [
//        'admin' => [
//            'controller' => 'admin',
//            'action' => 'index'
//        ],
//        'admin/login' => [
//            'controller' => 'admin',
//            'action' => 'login'
//        ],
//        'admin/logout' => [
//            'controller' => 'admin',
//            'action' => 'logout'
//        ],
//    ],
//
//    'admin/post' => [
//        'admin/post' => [
//            'controller' => 'post',
//            'action' => 'index'
//        ],
//        'admin/post/{page:\d+}' => [
//            'controller' => 'post',
//            'action' => 'index'
//        ],
//        'admin/post/create' => [
//            'controller' => 'post',
//            'action' => 'create'
//        ],
//        'admin/post/edit/{id:\d+}' => [
//            'controller' => 'post',
//            'action' => 'edit'
//        ],
//        'admin/post/delete/{id:\d+}' => [
//            'controller' => 'post',
//            'action' => 'delete'
//        ],
//    ],
//
//
//    'admin/product' => [
//        'admin/product' => [
//            'controller' => 'product',
//            'action' => 'index'
//        ],
//        'admin/product/{page:\d+}' => [
//            'controller' => 'product',
//            'action' => 'index'
//        ],
//        'admin/product/create' => [
//            'controller' => 'product',
//            'action' => 'add'
//        ],
//        'admin/product/edit/{id:\d+}' => [
//            'controller' => 'product',
//            'action' => 'edit'
//        ],
//        'admin/product/delete/{id:\d+}' => [
//            'controller' => 'product',
//            'action' => 'delete'
//        ],
//    ],
//
//    'admin/user' => [
//        'admin/user' => [
//            'controller' => 'user',
//            'action' => 'index'
//        ],
//        'admin/user/{page:\d+}' => [
//            'controller' => 'user',
//            'action' => 'index'
//        ],
//        'admin/user/create' => [
//            'controller' => 'user',
//            'action' => 'add'
//        ],
//        'admin/user/edit/{id:\d+}' => [
//            'controller' => 'user',
//            'action' => 'edit'
//        ],
//        'admin/user/delete/{id:\d+}' => [
//            'controller' => 'user',
//            'action' => 'delete'
//        ],
//    ],
//
//
//];

return [

    // Main


        '' => [
            'controller' => 'main',
            'action' => 'index'
        ],
        'shop' => [
            'controller' => 'main',
            'action' => 'shop'
        ],
        'shop/product' => [
            'controller' => 'main',
            'action' => 'product'
        ],
        'about' => [
            'controller' => 'main',
            'action' => 'about'
        ],
        'blog' => [
            'controller' => 'main',
            'action' => 'blog'
        ],
        'blog/{id:\d+}' => [
            'controller' => 'main',
            'action' => 'blog'
        ],
        'blog/post/{id:\d+}' => [
            'controller' => 'main',
            'action' => 'blog'
        ],
        'pages' => [
            'controller' => 'main',
            'action' => 'pages'
        ],
        'contact' => [
            'controller' => 'main',
            'action' => 'contact'
        ],


    // Admin


        'admin' => [
            'controller' => 'admin',
            'action' => 'index'
        ],
        'admin/login' => [
            'controller' => 'admin',
            'action' => 'login'
        ],
        'admin/logout' => [
            'controller' => 'admin',
            'action' => 'logout'
        ],



        'admin/post' => [
            'controller' => 'post',
            'action' => 'index'
        ],
        'admin/post/{page:\d+}' => [
            'controller' => 'post',
            'action' => 'index'
        ],
        'admin/post/create' => [
            'controller' => 'post',
            'action' => 'create'
        ],
        'admin/post/add' => [
            'controller' => 'post',
            'action' => 'add'
        ],
        'admin/post/edit/{id:\d+}' => [
            'controller' => 'post',
            'action' => 'edit'
        ],
        'admin/post/delete/{id:\d+}' => [
            'controller' => 'post',
            'action' => 'delete'
        ],




        'admin/product' => [
            'controller' => 'product',
            'action' => 'index'
        ],
        'admin/product/{page:\d+}' => [
            'controller' => 'product',
            'action' => 'index'
        ],
        'admin/product/create' => [
            'controller' => 'product',
            'action' => 'add'
        ],
        'admin/product/edit/{id:\d+}' => [
            'controller' => 'product',
            'action' => 'edit'
        ],
        'admin/product/delete/{id:\d+}' => [
            'controller' => 'product',
            'action' => 'delete'
        ],


        'admin/user' => [
            'controller' => 'user',
            'action' => 'index'
        ],
        'admin/user/{page:\d+}' => [
            'controller' => 'user',
            'action' => 'index'
        ],
        'admin/user/create' => [
            'controller' => 'user',
            'action' => 'add'
        ],
        'admin/user/edit/{id:\d+}' => [
            'controller' => 'user',
            'action' => 'edit'
        ],
        'admin/user/delete/{id:\d+}' => [
            'controller' => 'user',
            'action' => 'delete'
        ],



];

