<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/qui' => [[['_route' => 'about', '_controller' => 'App\\Controller\\AboutController::index'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Administrateur\\AdminController::index'], null, null, null, false, false, null]],
        '/admin/list/user' => [[['_route' => 'admin_list_user', '_controller' => 'App\\Controller\\Administrateur\\AdminListUserController::index'], null, null, null, false, false, null]],
        '/admin/user/create' => [[['_route' => 'user_create', '_controller' => 'App\\Controller\\Administrateur\\AdminListUserController::createUser'], null, null, null, false, false, null]],
        '/article/admin' => [[['_route' => 'article_admin', '_controller' => 'App\\Controller\\Administrateur\\ArticleAdminController::index'], null, null, null, false, false, null]],
        '/article/admin/create' => [[['_route' => 'article_create', '_controller' => 'App\\Controller\\Administrateur\\ArticleAdminController::createArticle'], null, null, null, false, false, null]],
        '/job/admin' => [[['_route' => 'job_admin', '_controller' => 'App\\Controller\\Administrateur\\JobAdminController::index'], null, null, null, false, false, null]],
        '/job/admin/create' => [[['_route' => 'job_create', '_controller' => 'App\\Controller\\Administrateur\\JobAdminController::createJob'], null, null, null, false, false, null]],
        '/article' => [[['_route' => 'article', '_controller' => 'App\\Controller\\ArticleController::index'], null, null, null, false, false, null]],
        '/last/articles' => [[['_route' => 'last_article', '_controller' => 'App\\Controller\\ArticleController::lastArticle'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::jobs'], null, null, null, false, false, null]],
        '/job' => [[['_route' => 'job', '_controller' => 'App\\Controller\\JobController::index'], null, null, null, false, false, null]],
        '/all/job' => [[['_route' => 'all_job', '_controller' => 'App\\Controller\\JobController::allJob'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'profile', '_controller' => 'App\\Controller\\ProfileController::index'], null, null, null, false, false, null]],
        '/profile/create/info' => [[['_route' => 'profile_create', '_controller' => 'App\\Controller\\ProfileController::createInfo'], null, null, null, false, false, null]],
        '/profile/info' => [[['_route' => 'profile_info', '_controller' => 'App\\Controller\\ProfileController::show'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/space' => [[['_route' => 'space', '_controller' => 'App\\Controller\\SpaceController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|dmin/(?'
                        .'|user/(?'
                            .'|update\\-([^/]++)(*:44)'
                            .'|delete\\-([^/]++)(*:67)'
                        .')'
                        .'|article/(?'
                            .'|update\\-([^/]++)(*:102)'
                            .'|delete\\-([^/]++)(*:126)'
                        .')'
                        .'|job/(?'
                            .'|update\\-([^/]++)(*:158)'
                            .'|delete\\-([^/]++)(*:182)'
                        .')'
                    .')'
                    .'|rticle\\-([^/]++)(*:208)'
                .')'
                .'|/job\\-([^/]++)(*:231)'
                .'|/([^/]++)/edit(*:253)'
                .'|/profile/delete\\-([^/]++)(*:286)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        44 => [[['_route' => 'user_update', '_controller' => 'App\\Controller\\Administrateur\\AdminListUserController::updateUser'], ['id'], null, null, false, true, null]],
        67 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\Administrateur\\AdminListUserController::deleteUser'], ['id'], null, null, false, true, null]],
        102 => [[['_route' => 'article_update', '_controller' => 'App\\Controller\\Administrateur\\ArticleAdminController::updateArticle'], ['id'], null, null, false, true, null]],
        126 => [[['_route' => 'article_delete', '_controller' => 'App\\Controller\\Administrateur\\ArticleAdminController::deleteArticle'], ['id'], null, null, false, true, null]],
        158 => [[['_route' => 'job_update', '_controller' => 'App\\Controller\\Administrateur\\JobAdminController::updateJob'], ['id'], null, null, false, true, null]],
        182 => [[['_route' => 'job_delete', '_controller' => 'App\\Controller\\Administrateur\\JobAdminController::deleteJob'], ['id'], null, null, false, true, null]],
        208 => [[['_route' => 'article_show', '_controller' => 'App\\Controller\\ArticleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        231 => [[['_route' => 'job_show', '_controller' => 'App\\Controller\\JobController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        253 => [[['_route' => 'profile_edit', '_controller' => 'App\\Controller\\ProfileController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        286 => [
            [['_route' => 'profile_delete', '_controller' => 'App\\Controller\\ProfileController::deleteUser'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
