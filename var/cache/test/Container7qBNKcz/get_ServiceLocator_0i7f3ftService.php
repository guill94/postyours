<?php

namespace Container7qBNKcz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_0i7f3ftService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.0i7f3ft' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.0i7f3ft'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'comment' => ['privates', '.errored..service_locator.0i7f3ft.App\\Entity\\Comment', NULL, 'Cannot autowire service ".service_locator.0i7f3ft": it references class "App\\Entity\\Comment" but no such service exists.'],
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'comment' => 'App\\Entity\\Comment',
            'em' => '?',
        ]);
    }
}
