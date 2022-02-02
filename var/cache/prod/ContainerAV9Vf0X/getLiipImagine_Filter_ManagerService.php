<?php

namespace ContainerAV9Vf0X;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLiipImagine_Filter_ManagerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'liip_imagine.filter.manager' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\FilterManager
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['liip_imagine.imagick'] ?? $container->load('getLiipImagine_ImagickService'));

        $container->services['liip_imagine.filter.manager'] = $instance = new \Liip\ImagineBundle\Imagine\Filter\FilterManager(($container->privates['liip_imagine.filter.configuration'] ?? $container->getLiipImagine_Filter_ConfigurationService()), $a, ($container->privates['liip_imagine.binary.mime_type_guesser'] ?? $container->load('getLiipImagine_Binary_MimeTypeGuesserService')));

        $instance->addLoader('relative_resize', new \Liip\ImagineBundle\Imagine\Filter\Loader\RelativeResizeFilterLoader());
        $instance->addLoader('resize', new \Liip\ImagineBundle\Imagine\Filter\Loader\ResizeFilterLoader());
        $instance->addLoader('thumbnail', new \Liip\ImagineBundle\Imagine\Filter\Loader\ThumbnailFilterLoader());
        $instance->addLoader('crop', new \Liip\ImagineBundle\Imagine\Filter\Loader\CropFilterLoader());
        $instance->addLoader('grayscale', ($container->services['liip_imagine.filter.loader.grayscale'] ?? ($container->services['liip_imagine.filter.loader.grayscale'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\GrayscaleFilterLoader())));
        $instance->addLoader('paste_image', new \Liip\ImagineBundle\Imagine\Filter\Loader\PasteFilterLoader($a, \dirname(__DIR__, 4)));
        $instance->addLoader('watermark_image', new \Liip\ImagineBundle\Imagine\Filter\Loader\WatermarkFilterLoader($a, \dirname(__DIR__, 4)));
        $instance->addLoader('background', new \Liip\ImagineBundle\Imagine\Filter\Loader\BackgroundFilterLoader($a));
        $instance->addLoader('strip', new \Liip\ImagineBundle\Imagine\Filter\Loader\StripFilterLoader());
        $instance->addLoader('scale', new \Liip\ImagineBundle\Imagine\Filter\Loader\ScaleFilterLoader());
        $instance->addLoader('upscale', new \Liip\ImagineBundle\Imagine\Filter\Loader\UpscaleFilterLoader());
        $instance->addLoader('downscale', ($container->services['liip_imagine.filter.loader.downscale'] ?? ($container->services['liip_imagine.filter.loader.downscale'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\DownscaleFilterLoader())));
        $instance->addLoader('auto_rotate', new \Liip\ImagineBundle\Imagine\Filter\Loader\AutoRotateFilterLoader());
        $instance->addLoader('rotate', ($container->services['liip_imagine.filter.loader.rotate'] ?? ($container->services['liip_imagine.filter.loader.rotate'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\RotateFilterLoader())));
        $instance->addLoader('flip', ($container->services['liip_imagine.filter.loader.flip'] ?? ($container->services['liip_imagine.filter.loader.flip'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\FlipFilterLoader())));
        $instance->addLoader('interlace', ($container->services['liip_imagine.filter.loader.interlace'] ?? ($container->services['liip_imagine.filter.loader.interlace'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\InterlaceFilterLoader())));
        $instance->addLoader('resample', ($container->services['liip_imagine.filter.loader.resample'] ?? $container->load('getLiipImagine_Filter_Loader_ResampleService')));
        $instance->addLoader('fixed', ($container->services['liip_imagine.filter.loader.fixed'] ?? ($container->services['liip_imagine.filter.loader.fixed'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\FixedFilterLoader())));
        $instance->addPostProcessor('jpegoptim', new \Liip\ImagineBundle\Imagine\Filter\PostProcessor\JpegOptimPostProcessor('/usr/bin/jpegoptim', true, NULL, true, NULL));
        $instance->addPostProcessor('optipng', new \Liip\ImagineBundle\Imagine\Filter\PostProcessor\OptiPngPostProcessor('/usr/bin/optipng', 7, true, NULL));
        $instance->addPostProcessor('pngquant', new \Liip\ImagineBundle\Imagine\Filter\PostProcessor\PngquantPostProcessor('/usr/bin/pngquant'));
        $instance->addPostProcessor('mozjpeg', new \Liip\ImagineBundle\Imagine\Filter\PostProcessor\MozJpegPostProcessor('/opt/mozjpeg/bin/cjpeg'));

        return $instance;
    }
}
