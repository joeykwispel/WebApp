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
        '/artist' => [[['_route' => 'artist_index', '_controller' => 'App\\Controller\\ArtistController::index'], null, ['GET' => 0], null, true, false, null]],
        '/artist/new' => [[['_route' => 'artist_new', '_controller' => 'App\\Controller\\ArtistController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/history' => [[['_route' => 'history', '_controller' => 'App\\Controller\\HistoryController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'Default', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/nextweek' => [[['_route' => 'next_week', '_controller' => 'App\\Controller\\NextWeekController::index'], null, null, null, false, false, null]],
        '/performance' => [[['_route' => 'performance_index', '_controller' => 'App\\Controller\\PerformanceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/performance/new' => [[['_route' => 'performance_new', '_controller' => 'App\\Controller\\PerformanceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/artist/([^/]++)(?'
                    .'|(*:188)'
                    .'|/edit(*:201)'
                    .'|(*:209)'
                .')'
                .'|/performance/([^/]++)(?'
                    .'|(*:242)'
                    .'|/edit(*:255)'
                    .'|(*:263)'
                .')'
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
        188 => [[['_route' => 'artist_show', '_controller' => 'App\\Controller\\ArtistController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        201 => [[['_route' => 'artist_edit', '_controller' => 'App\\Controller\\ArtistController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        209 => [[['_route' => 'artist_delete', '_controller' => 'App\\Controller\\ArtistController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        242 => [[['_route' => 'performance_show', '_controller' => 'App\\Controller\\PerformanceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        255 => [[['_route' => 'performance_edit', '_controller' => 'App\\Controller\\PerformanceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        263 => [
            [['_route' => 'performance_delete', '_controller' => 'App\\Controller\\PerformanceController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
