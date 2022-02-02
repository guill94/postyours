<?php

namespace Container7qBNKcz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLiipImagine_Factory_Config_Filter_BackgroundService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'liip_imagine.factory.config.filter.background' shared service.
     *
     * @return \Liip\ImagineBundle\Factory\Config\Filter\BackgroundFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'liip'.\DIRECTORY_SEPARATOR.'imagine-bundle'.\DIRECTORY_SEPARATOR.'Factory'.\DIRECTORY_SEPARATOR.'Config'.\DIRECTORY_SEPARATOR.'FilterFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'liip'.\DIRECTORY_SEPARATOR.'imagine-bundle'.\DIRECTORY_SEPARATOR.'Factory'.\DIRECTORY_SEPARATOR.'Config'.\DIRECTORY_SEPARATOR.'Filter'.\DIRECTORY_SEPARATOR.'BackgroundFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'liip'.\DIRECTORY_SEPARATOR.'imagine-bundle'.\DIRECTORY_SEPARATOR.'Factory'.\DIRECTORY_SEPARATOR.'Config'.\DIRECTORY_SEPARATOR.'Filter'.\DIRECTORY_SEPARATOR.'Argument'.\DIRECTORY_SEPARATOR.'SizeFactory.php';

        return $container->privates['liip_imagine.factory.config.filter.background'] = new \Liip\ImagineBundle\Factory\Config\Filter\BackgroundFactory(($container->privates['liip_imagine.factory.config.filter.argument.size'] ?? ($container->privates['liip_imagine.factory.config.filter.argument.size'] = new \Liip\ImagineBundle\Factory\Config\Filter\Argument\SizeFactory())));
    }
}
