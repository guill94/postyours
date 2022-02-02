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
        '/connexion/motdepasse/reinitialiser' => [[['_route' => 'pw_forgot', '_controller' => 'App\\Controller\\AccountPasswordController::forgotPasswordEmail'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/nouvelle/image' => [[['_route' => 'create_image', '_controller' => 'App\\Controller\\ImageController::index'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'register', '_controller' => 'App\\Controller\\RegisterController::index'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/co(?'
                    .'|mment/([0-9]+)/delete(*:34)'
                    .'|nfirmer/([^/]++)(*:57)'
                .')'
                .'|/m(?'
                    .'|otdepasse/reinitialiser/([^/]++)(*:102)'
                    .'|edia/cache/resolve/(?'
                        .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:162)'
                        .'|([A-z0-9_-]*)/(.+)(*:188)'
                    .')'
                .')'
                .'|/image/(?'
                    .'|([0-9]+)(*:216)'
                    .'|([0-9]+)/modifier(*:241)'
                    .'|([0-9]+)/supprimer(*:267)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        34 => [[['_route' => 'delete_comment', '_controller' => 'App\\Controller\\AccountController::deleteComment'], ['id'], null, null, false, false, null]],
        57 => [[['_route' => 'confirm_account', '_controller' => 'App\\Controller\\RegisterController::confirmAccount'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => 'reset_password', '_controller' => 'App\\Controller\\AccountPasswordController::PasswordReset'], ['token'], null, null, false, true, null]],
        162 => [[['_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter', 'hash', 'path'], ['GET' => 0], null, false, true, null]],
        188 => [[['_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter', 'path'], ['GET' => 0], null, false, true, null]],
        216 => [[['_route' => 'home_image_show', '_controller' => 'App\\Controller\\HomeController::show'], ['id'], null, null, false, true, null]],
        241 => [[['_route' => 'edit_image', '_controller' => 'App\\Controller\\ImageController::edit'], ['id'], null, null, false, false, null]],
        267 => [
            [['_route' => 'delete_image', '_controller' => 'App\\Controller\\ImageController::delete'], ['id'], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
