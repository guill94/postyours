<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/compte' => [[['_route' => 'account', '_controller' => 'App\\Controller\\AccountController::index'], null, null, null, false, false, null]],
        '/compte/modifier_motdepasse' => [[['_route' => 'account_password', '_controller' => 'App\\Controller\\AccountPasswordController::index'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/nouvelle/image' => [[['_route' => 'create_image', '_controller' => 'App\\Controller\\ImageController::index'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'register', '_controller' => 'App\\Controller\\RegisterController::index'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/image/(?'
                    .'|([0-9]+)(*:25)'
                    .'|([0-9]+)/modifier(*:49)'
                    .'|([0-9]+)/supprimer(*:74)'
                .')'
                .'|/confirmer/([^/]++)(*:101)'
                .'|/media/cache/resolve/(?'
                    .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:163)'
                    .'|([A-z0-9_-]*)/(.+)(*:189)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        25 => [[['_route' => 'home_image_show', '_controller' => 'App\\Controller\\HomeController::show'], ['id'], null, null, false, true, null]],
        49 => [[['_route' => 'edit_image', '_controller' => 'App\\Controller\\ImageController::edit'], ['id'], null, null, false, false, null]],
        74 => [[['_route' => 'delete_image', '_controller' => 'App\\Controller\\ImageController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        101 => [[['_route' => 'confirm_account', '_controller' => 'App\\Controller\\RegisterController::confirmAccount'], ['token'], null, null, false, true, null]],
        163 => [[['_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter', 'hash', 'path'], ['GET' => 0], null, false, true, null]],
        189 => [
            [['_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter', 'path'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
