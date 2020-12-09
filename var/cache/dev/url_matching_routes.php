<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
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
        '/favorites' => [[['_route' => 'favorites', '_controller' => 'App\\Controller\\FavoritesController::index'], null, null, null, false, false, null]],
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
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/a(?'
                    .'|dmin/(?'
                        .'|user/(?'
                            .'|update\\-([^/]++)(*:206)'
                            .'|delete\\-([^/]++)(*:230)'
                        .')'
                        .'|article/(?'
                            .'|update\\-([^/]++)(*:266)'
                            .'|delete\\-([^/]++)(*:290)'
                        .')'
                        .'|job/(?'
                            .'|update\\-([^/]++)(*:322)'
                            .'|delete\\-([^/]++)(*:346)'
                        .')'
                    .')'
                    .'|rticle\\-([^/]++)(*:372)'
                .')'
                .'|/job\\-([^/]++)(*:395)'
                .'|/([^/]++)/edit(*:417)'
                .'|/profile/delete\\-([^/]++)(*:450)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        206 => [[['_route' => 'user_update', '_controller' => 'App\\Controller\\Administrateur\\AdminListUserController::updateUser'], ['id'], null, null, false, true, null]],
        230 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\Administrateur\\AdminListUserController::deleteUser'], ['id'], null, null, false, true, null]],
        266 => [[['_route' => 'article_update', '_controller' => 'App\\Controller\\Administrateur\\ArticleAdminController::updateArticle'], ['id'], null, null, false, true, null]],
        290 => [[['_route' => 'article_delete', '_controller' => 'App\\Controller\\Administrateur\\ArticleAdminController::deleteArticle'], ['id'], null, null, false, true, null]],
        322 => [[['_route' => 'job_update', '_controller' => 'App\\Controller\\Administrateur\\JobAdminController::updateJob'], ['id'], null, null, false, true, null]],
        346 => [[['_route' => 'job_delete', '_controller' => 'App\\Controller\\Administrateur\\JobAdminController::deleteJob'], ['id'], null, null, false, true, null]],
        372 => [[['_route' => 'article_show', '_controller' => 'App\\Controller\\ArticleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        395 => [[['_route' => 'job_show', '_controller' => 'App\\Controller\\JobController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        417 => [[['_route' => 'profile_edit', '_controller' => 'App\\Controller\\ProfileController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        450 => [
            [['_route' => 'profile_delete', '_controller' => 'App\\Controller\\ProfileController::deleteUser'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
