<?php

namespace ContainerAV9Vf0X;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_D2Q_Q0fService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.D2Q.Q0f' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.D2Q.Q0f'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'image' => ['privates', '.errored..service_locator.D2Q.Q0f.App\\Entity\\Images', NULL, 'Cannot autowire service ".service_locator.D2Q.Q0f": it references class "App\\Entity\\Images" but no such service exists.'],
        ], [
            'em' => '?',
            'image' => 'App\\Entity\\Images',
        ]);
    }
}
