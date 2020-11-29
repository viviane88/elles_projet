<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'about' => [[], ['_controller' => 'App\\Controller\\AboutController::index'], [], [['text', '/qui']], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\Administrateur\\AdminController::index'], [], [['text', '/admin']], [], []],
    'admin_list_user' => [[], ['_controller' => 'App\\Controller\\Administrateur\\AdminListUserController::index'], [], [['text', '/admin/list/user']], [], []],
    'user_create' => [[], ['_controller' => 'App\\Controller\\Administrateur\\AdminListUserController::createUser'], [], [['text', '/admin/user/create']], [], []],
    'user_update' => [['id'], ['_controller' => 'App\\Controller\\Administrateur\\AdminListUserController::updateUser'], [], [['variable', '-', '[^/]++', 'id', true], ['text', '/admin/user/update']], [], []],
    'user_delete' => [['id'], ['_controller' => 'App\\Controller\\Administrateur\\AdminListUserController::deleteUser'], [], [['variable', '-', '[^/]++', 'id', true], ['text', '/admin/user/delete']], [], []],
    'article_admin' => [[], ['_controller' => 'App\\Controller\\Administrateur\\ArticleAdminController::index'], [], [['text', '/article/admin']], [], []],
    'article_create' => [[], ['_controller' => 'App\\Controller\\Administrateur\\ArticleAdminController::createArticle'], [], [['text', '/article/admin/create']], [], []],
    'article_update' => [['id'], ['_controller' => 'App\\Controller\\Administrateur\\ArticleAdminController::updateArticle'], [], [['variable', '-', '[^/]++', 'id', true], ['text', '/admin/article/update']], [], []],
    'article_delete' => [['id'], ['_controller' => 'App\\Controller\\Administrateur\\ArticleAdminController::deleteArticle'], [], [['variable', '-', '[^/]++', 'id', true], ['text', '/admin/article/delete']], [], []],
    'job_admin' => [[], ['_controller' => 'App\\Controller\\Administrateur\\JobAdminController::index'], [], [['text', '/job/admin']], [], []],
    'job_create' => [[], ['_controller' => 'App\\Controller\\Administrateur\\JobAdminController::createJob'], [], [['text', '/job/admin/create']], [], []],
    'job_update' => [['id'], ['_controller' => 'App\\Controller\\Administrateur\\JobAdminController::updateJob'], [], [['variable', '-', '[^/]++', 'id', true], ['text', '/admin/job/update']], [], []],
    'job_delete' => [['id'], ['_controller' => 'App\\Controller\\Administrateur\\JobAdminController::deleteJob'], [], [['variable', '-', '[^/]++', 'id', true], ['text', '/admin/job/delete']], [], []],
    'article' => [[], ['_controller' => 'App\\Controller\\ArticleController::index'], [], [['text', '/article']], [], []],
    'article_show' => [['id'], ['_controller' => 'App\\Controller\\ArticleController::show'], [], [['variable', '-', '[^/]++', 'id', true], ['text', '/article']], [], []],
    'contact' => [[], ['_controller' => 'App\\Controller\\ContactController::index'], [], [['text', '/contact']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::jobs'], [], [['text', '/']], [], []],
    'job' => [[], ['_controller' => 'App\\Controller\\JobController::index'], [], [['text', '/job']], [], []],
    'job_show' => [['id'], ['_controller' => 'App\\Controller\\JobController::show'], [], [['variable', '-', '[^/]++', 'id', true], ['text', '/job']], [], []],
    'profile' => [[], ['_controller' => 'App\\Controller\\ProfileController::index'], [], [['text', '/profile']], [], []],
    'profile_create' => [[], ['_controller' => 'App\\Controller\\ProfileController::createInfo'], [], [['text', '/profile/create/info']], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'space' => [[], ['_controller' => 'App\\Controller\\SpaceController::index'], [], [['text', '/space']], [], []],
];