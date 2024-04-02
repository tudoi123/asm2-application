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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/adminư45453525' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'app_indexadmin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/cart' => [[['_route' => 'app_cart', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/order' => [[['_route' => 'app_order_index', '_controller' => 'App\\Controller\\CartController::orderIndex'], null, ['GET' => 0], null, false, false, null]],
        '/new' => [[['_route' => 'app_order_new', '_controller' => 'App\\Controller\\CartController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/orderstatus' => [[['_route' => 'app_order_status', '_controller' => 'App\\Controller\\CartController::orderStatus'], null, null, null, false, false, null]],
        '/category' => [[['_route' => 'app_category_index', '_controller' => 'App\\Controller\\CategoryController::index'], null, ['GET' => 0], null, true, false, null]],
        '/category/new' => [[['_route' => 'app_category_new', '_controller' => 'App\\Controller\\CategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact_index', '_controller' => 'App\\Controller\\ContactController::index'], null, ['GET' => 0], null, true, false, null]],
        '/contactnew' => [[['_route' => 'app_contact_new', '_controller' => 'App\\Controller\\ContactController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/error' => [[['_route' => 'app_error', '_controller' => 'App\\Controller\\ErrorController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/home1' => [[['_route' => 'app_home_all', '_controller' => 'App\\Controller\\HomeController::index2'], null, null, null, false, false, null]],
        '/airpods' => [[['_route' => 'app_airpods', '_controller' => 'App\\Controller\\HomeController::airpodsIndex'], null, null, null, false, false, null]],
        '/search' => [[['_route' => 'search', '_controller' => 'App\\Controller\\HomeController::search'], null, null, null, false, false, null]],
        '/ipad' => [[['_route' => 'app_ipad', '_controller' => 'App\\Controller\\HomeController::ipadIndex'], null, null, null, false, false, null]],
        '/iphone' => [[['_route' => 'app_iphone', '_controller' => 'App\\Controller\\HomeController::iphoneindex'], null, null, null, false, false, null]],
        '/macbook' => [[['_route' => 'app_macbook', '_controller' => 'App\\Controller\\HomeController::macbookindex'], null, null, null, false, false, null]],
        '/watch' => [[['_route' => 'app_watch', '_controller' => 'App\\Controller\\HomeController::watchindex'], null, null, null, false, false, null]],
        '/postnew' => [[['_route' => 'app_new', '_controller' => 'App\\Controller\\NewController::index2'], null, null, null, false, false, null]],
        '/order/detail/new' => [[['_route' => 'app_order_detail_new', '_controller' => 'App\\Controller\\OrderDetailController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/ordersuccess' => [[['_route' => 'app_order_success', '_controller' => 'App\\Controller\\OrderSuccessController::index'], null, null, null, false, false, null]],
        '/position' => [[['_route' => 'app_position_index', '_controller' => 'App\\Controller\\PositionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/position/new' => [[['_route' => 'app_position_new', '_controller' => 'App\\Controller\\PositionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/post' => [[['_route' => 'app_post_index', '_controller' => 'App\\Controller\\PostController::index'], null, ['GET' => 0], null, true, false, null]],
        '/post/new' => [[['_route' => 'app_post_new', '_controller' => 'App\\Controller\\PostController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/product' => [[['_route' => 'app_product_index', '_controller' => 'App\\Controller\\ProductController::index'], null, ['GET' => 0], null, true, false, null]],
        '/product/new' => [[['_route' => 'app_product_new', '_controller' => 'App\\Controller\\ProductController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/c(?'
                    .'|a(?'
                        .'|rt/(?'
                            .'|update/([^/]++)(*:199)'
                            .'|delete/([^/]++)(*:222)'
                            .'|add/([^/]++)(*:242)'
                        .')'
                        .'|tegory/([^/]++)(?'
                            .'|(*:269)'
                            .'|/edit(*:282)'
                            .'|(*:290)'
                        .')'
                    .')'
                    .'|ontact/([^/]++)(?'
                        .'|(*:318)'
                    .')'
                .')'
                .'|/order/(?'
                    .'|([^/]++)(?'
                        .'|(*:349)'
                        .'|/edit(*:362)'
                    .')'
                    .'|confirmation(*:383)'
                    .'|detail(?'
                        .'|(*:400)'
                        .'|/([^/]++)(?'
                            .'|(*:420)'
                            .'|/edit(*:433)'
                            .'|(*:441)'
                        .')'
                    .')'
                .')'
                .'|/detail/([^/]++)(*:468)'
                .'|/p(?'
                    .'|os(?'
                        .'|t(?'
                            .'|detail/([^/]++)(*:505)'
                            .'|/([^/]++)(?'
                                .'|(*:525)'
                                .'|/edit(*:538)'
                                .'|(*:546)'
                            .')'
                        .')'
                        .'|ition/([^/]++)(?'
                            .'|(*:573)'
                            .'|/edit(*:586)'
                            .'|(*:594)'
                        .')'
                    .')'
                    .'|roduct/([^/]++)(?'
                        .'|(*:622)'
                        .'|/edit(*:635)'
                        .'|(*:643)'
                    .')'
                .')'
                .'|/ipad/([^/]++)(*:667)'
                .'|/user/([^/]++)(?'
                    .'|(*:692)'
                    .'|/edit(*:705)'
                    .'|(*:713)'
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
        199 => [[['_route' => 'app_update_cart', '_controller' => 'App\\Controller\\CartController::updateCartItem'], ['id'], ['POST' => 0], null, false, true, null]],
        222 => [[['_route' => 'app_delete_cart', '_controller' => 'App\\Controller\\CartController::deleteCartItem'], ['id'], ['POST' => 0], null, false, true, null]],
        242 => [[['_route' => 'app_add_to_cart', '_controller' => 'App\\Controller\\CartController::addToCart'], ['productId'], null, null, false, true, null]],
        269 => [[['_route' => 'app_category_show', '_controller' => 'App\\Controller\\CategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        282 => [[['_route' => 'app_category_edit', '_controller' => 'App\\Controller\\CategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        290 => [[['_route' => 'app_category_delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        318 => [
            [['_route' => 'app_contact_show', '_controller' => 'App\\Controller\\ContactController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_contact_delete', '_controller' => 'App\\Controller\\ContactController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        349 => [[['_route' => 'app_order_delete', '_controller' => 'App\\Controller\\CartController::deleteOrder'], ['id'], ['POST' => 0], null, false, true, null]],
        362 => [[['_route' => 'app_order_edit', '_controller' => 'App\\Controller\\CartController::editOrder'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        383 => [[['_route' => 'app_order_confirmation', '_controller' => 'App\\Controller\\OrderConfirmationController::index'], [], null, null, false, false, null]],
        400 => [[['_route' => 'app_order_detail_index', '_controller' => 'App\\Controller\\OrderDetailController::index'], [], ['GET' => 0], null, true, false, null]],
        420 => [[['_route' => 'app_order_detail_show', '_controller' => 'App\\Controller\\OrderDetailController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        433 => [[['_route' => 'app_order_detail_edit', '_controller' => 'App\\Controller\\OrderDetailController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        441 => [[['_route' => 'app_order_detail_delete', '_controller' => 'App\\Controller\\OrderDetailController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        468 => [[['_route' => 'app_detail_show', '_controller' => 'App\\Controller\\DetailController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        505 => [[['_route' => 'app_detailnew', '_controller' => 'App\\Controller\\DetailnewController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        525 => [[['_route' => 'app_post_show', '_controller' => 'App\\Controller\\PostController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        538 => [[['_route' => 'app_post_edit', '_controller' => 'App\\Controller\\PostController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        546 => [[['_route' => 'app_post_delete', '_controller' => 'App\\Controller\\PostController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        573 => [[['_route' => 'app_position_show', '_controller' => 'App\\Controller\\PositionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        586 => [[['_route' => 'app_position_edit', '_controller' => 'App\\Controller\\PositionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        594 => [[['_route' => 'app_position_delete', '_controller' => 'App\\Controller\\PositionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        622 => [[['_route' => 'app_product_show', '_controller' => 'App\\Controller\\ProductController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        635 => [[['_route' => 'app_product_edit', '_controller' => 'App\\Controller\\ProductController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        643 => [[['_route' => 'app_product_delete', '_controller' => 'App\\Controller\\ProductController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        667 => [[['_route' => 'app_ipad_product_detail', '_controller' => 'App\\Controller\\HomeController::ipadProductDetail'], ['id'], null, null, false, true, null]],
        692 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        705 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        713 => [
            [['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
