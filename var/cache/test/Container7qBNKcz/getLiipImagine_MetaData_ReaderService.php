<?php

namespace Container7qBNKcz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLiipImagine_MetaData_ReaderService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'liip_imagine.meta_data.reader' shared service.
     *
     * @return \Imagine\Image\Metadata\DefaultMetadataReader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'imagine'.\DIRECTORY_SEPARATOR.'imagine'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Image'.\DIRECTORY_SEPARATOR.'Metadata'.\DIRECTORY_SEPARATOR.'MetadataReaderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'imagine'.\DIRECTORY_SEPARATOR.'imagine'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Image'.\DIRECTORY_SEPARATOR.'Metadata'.\DIRECTORY_SEPARATOR.'AbstractMetadataReader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'imagine'.\DIRECTORY_SEPARATOR.'imagine'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Image'.\DIRECTORY_SEPARATOR.'Metadata'.\DIRECTORY_SEPARATOR.'DefaultMetadataReader.php';

        return $container->privates['liip_imagine.meta_data.reader'] = new \Imagine\Image\Metadata\DefaultMetadataReader();
    }
}
