<?php

namespace Container7qBNKcz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLiipImagine_Filter_ManagerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'liip_imagine.filter.manager' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\FilterManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'liip'.\DIRECTORY_SEPARATOR.'imagine-bundle'.\DIRECTORY_SEPARATOR.'Imagine'.\DIRECTORY_SEPARATOR.'Filter'.\DIRECTORY_SEPARATOR.'FilterManager.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'liip'.\DIRECTORY_SEPARATOR.'imagine-bundle'.\DIRECTORY_SEPARATOR.'Imagine'.\DIRECTORY_SEPARATOR.'Filter'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'LoaderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'liip'.\DIRECTORY_SEPARATOR.'imagine-bundle'.\DIRECTORY_SEPARATOR.'Imagine'.\DIRECTORY_SEPARATOR.'Filter'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'RelativeResizeFilterLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'liip'.\DIRECTORY_SEPARATOR.'imagine-bundle'.\DIRECTORY_SEPARATOR.'Imagine'.\DIRECTORY_SEPARATOR.'Filter'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'ResizeFilterLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'liip'.\DIRECTORY_SEPARATOR.'imagine-bundle'.\DIRECTORY_SEPARATOR.'Imagine'.\DIRECTORY_SEPARATOR.'Filter'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'ThumbnailFilterLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'liip'.\DIRECTORY_SEPARATOR.'imagine-bundle'.\DIRECTORY_SEPARATOR.'Imagine'.\DIRECTORY_SEPARATOR.'Filter'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'CropFilterLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'liip'.\DIRECTORY_SEPARATOR.'imagine-bundle'.\DIRECTORY_SEPARATOR.'Imagine'.\DIRECTORY_SEPARATOR.'Filter'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'GrayscaleFilterLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'liip'.\DIRECTORY_SEPARATOR.'imagine-bundle'.\DIRECTORY_SEPARATOR.'Imagine'.\DIRECTORY_SEPARATOR.'Filter'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'StripFilterLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'liip'.\DIRECTORY_SEPARATOR.'imagine-bundle'.\DIRECTORY_SEPARATOR.'Imagine'.\DIRECTORY_SEPARATOR.'Filter'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'ScaleFilterLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'liip'.\DIRECTORY_SEPARATOR.'imagine-bundle'.\DIRECTORY_SEPARATOR.'Imagine'.\DIRECTORY_SEPARATOR.'Filter'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'UpscaleFilterLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'liip'.\DIRECTORY_SEPARATOR.'imagine-bundle'.\DIRECTORY_SEPARATOR.'Imagine'.\DIRECTORY_SEPARATOR.'Filter'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'DownscaleFilterLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'liip'.\DIRECTORY_SEPARATOR.'imagine-bundle'.\DIRECTORY_SEPARATOR.'Imagine'.\DIRECTORY_SEPARATOR.'Filter'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'AutoRotateFilterLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'liip'.\DIRECTORY_SEPARATOR.'imagine-bundle'.\DIRECTORY_SEPARATOR.'Imagine'.\DIRECTORY_SEPARATOR.'Filter'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'RotateFilterLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'liip'.\DIRECTORY_SEPARATOR.'imagine-bundle'.\DIRECTORY_SEPARATOR.'Imagine'.\DIRECTORY_SEPARATOR.'Filter'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'FlipFilterLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'liip'.\DIRECTORY_SEPARATOR.'imagine-bundle'.\DIRECTORY_SEPARATOR.'Imagine'.\DIRECTORY_SEPARATOR.'Filter'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'InterlaceFilterLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'liip'.\DIRECTORY_SEPARATOR.'imagine-bundle'.\DIRECTORY_SEPARATOR.'Imagine'.\DIRECTORY_SEPARATOR.'Filter'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'FixedFilterLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'liip'.\DIRECTORY_SEPARATOR.'imagine-bundle'.\DIRECTORY_SEPARATOR.'Imagine'.\DIRECTORY_SEPARATOR.'Filter'.\DIRECTORY_SEPARATOR.'PostProcessor'.\DIRECTORY_SEPARATOR.'PostProcessorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'liip'.\DIRECTORY_SEPARATOR.'imagine-bundle'.\DIRECTORY_SEPARATOR.'Imagine'.\DIRECTORY_SEPARATOR.'Filter'.\DIRECTORY_SEPARATOR.'PostProcessor'.\DIRECTORY_SEPARATOR.'AbstractPostProcessor.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'liip'.\DIRECTORY_SEPARATOR.'imagine-bundle'.\DIRECTORY_SEPARATOR.'Imagine'.\DIRECTORY_SEPARATOR.'Filter'.\DIRECTORY_SEPARATOR.'PostProcessor'.\DIRECTORY_SEPARATOR.'PngquantPostProcessor.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'liip'.\DIRECTORY_SEPARATOR.'imagine-bundle'.\DIRECTORY_SEPARATOR.'Imagine'.\DIRECTORY_SEPARATOR.'Filter'.\DIRECTORY_SEPARATOR.'PostProcessor'.\DIRECTORY_SEPARATOR.'MozJpegPostProcessor.php';

        $container->services['liip_imagine.filter.manager'] = $instance = new \Liip\ImagineBundle\Imagine\Filter\FilterManager(($container->privates['liip_imagine.filter.configuration'] ?? $container->getLiipImagine_Filter_ConfigurationService()), ($container->privates['liip_imagine.imagick'] ?? $container->load('getLiipImagine_ImagickService')), ($container->privates['liip_imagine.binary.mime_type_guesser'] ?? $container->load('getLiipImagine_Binary_MimeTypeGuesserService')));

        $instance->addLoader('relative_resize', ($container->privates['liip_imagine.filter.loader.relative_resize'] ?? ($container->privates['liip_imagine.filter.loader.relative_resize'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\RelativeResizeFilterLoader())));
        $instance->addLoader('resize', ($container->privates['liip_imagine.filter.loader.resize'] ?? ($container->privates['liip_imagine.filter.loader.resize'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\ResizeFilterLoader())));
        $instance->addLoader('thumbnail', ($container->privates['liip_imagine.filter.loader.thumbnail'] ?? ($container->privates['liip_imagine.filter.loader.thumbnail'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\ThumbnailFilterLoader())));
        $instance->addLoader('crop', ($container->privates['liip_imagine.filter.loader.crop'] ?? ($container->privates['liip_imagine.filter.loader.crop'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\CropFilterLoader())));
        $instance->addLoader('grayscale', ($container->services['liip_imagine.filter.loader.grayscale'] ?? ($container->services['liip_imagine.filter.loader.grayscale'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\GrayscaleFilterLoader())));
        $instance->addLoader('paste_image', ($container->privates['liip_imagine.filter.loader.paste_image'] ?? $container->load('getLiipImagine_Filter_Loader_PasteImageService')));
        $instance->addLoader('watermark_image', ($container->privates['liip_imagine.filter.loader.watermark_image'] ?? $container->load('getLiipImagine_Filter_Loader_WatermarkImageService')));
        $instance->addLoader('background', ($container->privates['liip_imagine.filter.loader.background'] ?? $container->load('getLiipImagine_Filter_Loader_BackgroundService')));
        $instance->addLoader('strip', ($container->privates['liip_imagine.filter.loader.strip'] ?? ($container->privates['liip_imagine.filter.loader.strip'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\StripFilterLoader())));
        $instance->addLoader('scale', ($container->privates['liip_imagine.filter.loader.scale'] ?? ($container->privates['liip_imagine.filter.loader.scale'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\ScaleFilterLoader())));
        $instance->addLoader('upscale', ($container->privates['liip_imagine.filter.loader.upscale'] ?? ($container->privates['liip_imagine.filter.loader.upscale'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\UpscaleFilterLoader())));
        $instance->addLoader('downscale', ($container->services['liip_imagine.filter.loader.downscale'] ?? ($container->services['liip_imagine.filter.loader.downscale'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\DownscaleFilterLoader())));
        $instance->addLoader('auto_rotate', ($container->privates['liip_imagine.filter.loader.auto_rotate'] ?? ($container->privates['liip_imagine.filter.loader.auto_rotate'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\AutoRotateFilterLoader())));
        $instance->addLoader('rotate', ($container->services['liip_imagine.filter.loader.rotate'] ?? ($container->services['liip_imagine.filter.loader.rotate'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\RotateFilterLoader())));
        $instance->addLoader('flip', ($container->services['liip_imagine.filter.loader.flip'] ?? ($container->services['liip_imagine.filter.loader.flip'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\FlipFilterLoader())));
        $instance->addLoader('interlace', ($container->services['liip_imagine.filter.loader.interlace'] ?? ($container->services['liip_imagine.filter.loader.interlace'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\InterlaceFilterLoader())));
        $instance->addLoader('resample', ($container->services['liip_imagine.filter.loader.resample'] ?? $container->load('getLiipImagine_Filter_Loader_ResampleService')));
        $instance->addLoader('fixed', ($container->services['liip_imagine.filter.loader.fixed'] ?? ($container->services['liip_imagine.filter.loader.fixed'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\FixedFilterLoader())));
        $instance->addPostProcessor('jpegoptim', ($container->privates['liip_imagine.filter.post_processor.jpegoptim'] ?? $container->load('getLiipImagine_Filter_PostProcessor_JpegoptimService')));
        $instance->addPostProcessor('optipng', ($container->privates['liip_imagine.filter.post_processor.optipng'] ?? $container->load('getLiipImagine_Filter_PostProcessor_OptipngService')));
        $instance->addPostProcessor('pngquant', ($container->privates['liip_imagine.filter.post_processor.pngquant'] ?? ($container->privates['liip_imagine.filter.post_processor.pngquant'] = new \Liip\ImagineBundle\Imagine\Filter\PostProcessor\PngquantPostProcessor('/usr/bin/pngquant'))));
        $instance->addPostProcessor('mozjpeg', ($container->privates['liip_imagine.filter.post_processor.mozjpeg'] ?? ($container->privates['liip_imagine.filter.post_processor.mozjpeg'] = new \Liip\ImagineBundle\Imagine\Filter\PostProcessor\MozJpegPostProcessor('/opt/mozjpeg/bin/cjpeg'))));

        return $instance;
    }
}
