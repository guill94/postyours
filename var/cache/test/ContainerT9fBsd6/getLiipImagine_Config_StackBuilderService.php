<?php

namespace ContainerT9fBsd6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLiipImagine_Config_StackBuilderService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'liip_imagine.config.stack_builder' shared service.
     *
     * @return \Liip\ImagineBundle\Config\StackBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'liip'.\DIRECTORY_SEPARATOR.'imagine-bundle'.\DIRECTORY_SEPARATOR.'Config'.\DIRECTORY_SEPARATOR.'StackBuilderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'liip'.\DIRECTORY_SEPARATOR.'imagine-bundle'.\DIRECTORY_SEPARATOR.'Config'.\DIRECTORY_SEPARATOR.'StackBuilder.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'liip'.\DIRECTORY_SEPARATOR.'imagine-bundle'.\DIRECTORY_SEPARATOR.'Factory'.\DIRECTORY_SEPARATOR.'Config'.\DIRECTORY_SEPARATOR.'StackFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'liip'.\DIRECTORY_SEPARATOR.'imagine-bundle'.\DIRECTORY_SEPARATOR.'Factory'.\DIRECTORY_SEPARATOR.'Config'.\DIRECTORY_SEPARATOR.'StackFactory.php';

        return $container->privates['liip_imagine.config.stack_builder'] = new \Liip\ImagineBundle\Config\StackBuilder(($container->privates['liip_imagine.factory.config.stack'] ?? ($container->privates['liip_imagine.factory.config.stack'] = new \Liip\ImagineBundle\Factory\Config\StackFactory())), ($container->privates['liip_imagine.config.filter_factory_collection'] ?? $container->load('getLiipImagine_Config_FilterFactoryCollectionService')));
    }
}
