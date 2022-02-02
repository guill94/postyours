<?php

namespace ContainerT9fBsd6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLiipImagine_ImagickService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'liip_imagine.imagick' shared service.
     *
     * @return \Imagine\Imagick\Imagine
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'imagine'.\DIRECTORY_SEPARATOR.'imagine'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Factory'.\DIRECTORY_SEPARATOR.'ClassFactoryAwareInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'imagine'.\DIRECTORY_SEPARATOR.'imagine'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Image'.\DIRECTORY_SEPARATOR.'ImagineInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'imagine'.\DIRECTORY_SEPARATOR.'imagine'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Image'.\DIRECTORY_SEPARATOR.'AbstractImagine.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'imagine'.\DIRECTORY_SEPARATOR.'imagine'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Imagick'.\DIRECTORY_SEPARATOR.'Imagine.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'imagine'.\DIRECTORY_SEPARATOR.'imagine'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Image'.\DIRECTORY_SEPARATOR.'Metadata'.\DIRECTORY_SEPARATOR.'MetadataReaderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'imagine'.\DIRECTORY_SEPARATOR.'imagine'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Image'.\DIRECTORY_SEPARATOR.'Metadata'.\DIRECTORY_SEPARATOR.'AbstractMetadataReader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'imagine'.\DIRECTORY_SEPARATOR.'imagine'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Image'.\DIRECTORY_SEPARATOR.'Metadata'.\DIRECTORY_SEPARATOR.'DefaultMetadataReader.php';

        $container->privates['liip_imagine.imagick'] = $instance = new \Imagine\Imagick\Imagine();

        $instance->setMetadataReader(($container->privates['liip_imagine.meta_data.reader'] ?? ($container->privates['liip_imagine.meta_data.reader'] = new \Imagine\Image\Metadata\DefaultMetadataReader())));

        return $instance;
    }
}