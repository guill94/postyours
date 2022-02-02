<?php

namespace ContainerT9fBsd6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNullConfiguratorService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Filter\Configurator\NullConfigurator' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Filter\Configurator\NullConfigurator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'easycorp'.\DIRECTORY_SEPARATOR.'easyadmin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Contracts'.\DIRECTORY_SEPARATOR.'Filter'.\DIRECTORY_SEPARATOR.'FilterConfiguratorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'easycorp'.\DIRECTORY_SEPARATOR.'easyadmin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Filter'.\DIRECTORY_SEPARATOR.'Configurator'.\DIRECTORY_SEPARATOR.'NullConfigurator.php';

        return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\Configurator\\NullConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Filter\Configurator\NullConfigurator();
    }
}
