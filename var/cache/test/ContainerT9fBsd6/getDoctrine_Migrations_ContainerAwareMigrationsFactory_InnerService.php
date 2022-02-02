<?php

namespace ContainerT9fBsd6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Migrations_ContainerAwareMigrationsFactory_InnerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'doctrine.migrations.container_aware_migrations_factory.inner' shared service.
     *
     * @return \Doctrine\Migrations\Version\MigrationFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'migrations'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Migrations'.\DIRECTORY_SEPARATOR.'Version'.\DIRECTORY_SEPARATOR.'MigrationFactory.php';

        return $container->privates['doctrine.migrations.container_aware_migrations_factory.inner'] = ($container->privates['doctrine.migrations.dependency_factory'] ?? $container->getDoctrine_Migrations_DependencyFactoryService())->getMigrationFactory();
    }
}
