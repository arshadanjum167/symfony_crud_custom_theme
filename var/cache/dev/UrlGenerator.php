<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    'admin_default' => [[], ['_controller' => 'App\\Controller\\Admin\\DefaultController::index'], [], [['text', '/']], [], []],
    'admin_index' => [[], ['_controller' => 'App\\Controller\\Admin\\DefaultController::index'], [], [['text', '/admin']], [], []],
    'product_index' => [[], ['_controller' => 'App\\Controller\\Admin\\ProductController::index'], [], [['text', '/admin/product']], [], []],
    'product_new' => [[], ['_controller' => 'App\\Controller\\Admin\\ProductController::new'], [], [['text', '/admin/product/new']], [], []],
    'product_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\ProductController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/product']], [], []],
    'product_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\ProductController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/product']], [], []],
    'product_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\ProductController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/product']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/admin/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/admin/logout']], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/admin/register']], [], []],
];
