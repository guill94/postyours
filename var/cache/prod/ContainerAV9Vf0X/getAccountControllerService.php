<?php

namespace ContainerAV9Vf0X;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAccountControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\AccountController' shared autowired service.
     *
     * @return \App\Controller\AccountController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\AccountController'] = $instance = new \App\Controller\AccountController();

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\AccountController', $container));

        return $instance;
    }
}
