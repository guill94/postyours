<?php

namespace ContainerT9fBsd6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTranslation_WriterService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'translation.writer' shared service.
     *
     * @return \Symfony\Component\Translation\Writer\TranslationWriter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Writer'.\DIRECTORY_SEPARATOR.'TranslationWriterInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Writer'.\DIRECTORY_SEPARATOR.'TranslationWriter.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Dumper'.\DIRECTORY_SEPARATOR.'DumperInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Dumper'.\DIRECTORY_SEPARATOR.'FileDumper.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Dumper'.\DIRECTORY_SEPARATOR.'PhpFileDumper.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Dumper'.\DIRECTORY_SEPARATOR.'XliffFileDumper.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Dumper'.\DIRECTORY_SEPARATOR.'PoFileDumper.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Dumper'.\DIRECTORY_SEPARATOR.'MoFileDumper.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Dumper'.\DIRECTORY_SEPARATOR.'YamlFileDumper.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Dumper'.\DIRECTORY_SEPARATOR.'QtFileDumper.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Dumper'.\DIRECTORY_SEPARATOR.'CsvFileDumper.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Dumper'.\DIRECTORY_SEPARATOR.'IniFileDumper.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Dumper'.\DIRECTORY_SEPARATOR.'JsonFileDumper.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Dumper'.\DIRECTORY_SEPARATOR.'IcuResFileDumper.php';

        $container->privates['translation.writer'] = $instance = new \Symfony\Component\Translation\Writer\TranslationWriter();

        $instance->addDumper('php', ($container->privates['translation.dumper.php'] ?? ($container->privates['translation.dumper.php'] = new \Symfony\Component\Translation\Dumper\PhpFileDumper())));
        $instance->addDumper('xlf', ($container->privates['translation.dumper.xliff'] ?? ($container->privates['translation.dumper.xliff'] = new \Symfony\Component\Translation\Dumper\XliffFileDumper())));
        $instance->addDumper('po', ($container->privates['translation.dumper.po'] ?? ($container->privates['translation.dumper.po'] = new \Symfony\Component\Translation\Dumper\PoFileDumper())));
        $instance->addDumper('mo', ($container->privates['translation.dumper.mo'] ?? ($container->privates['translation.dumper.mo'] = new \Symfony\Component\Translation\Dumper\MoFileDumper())));
        $instance->addDumper('yml', ($container->privates['translation.dumper.yml'] ?? ($container->privates['translation.dumper.yml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper())));
        $instance->addDumper('yaml', ($container->privates['translation.dumper.yaml'] ?? ($container->privates['translation.dumper.yaml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper('yaml'))));
        $instance->addDumper('ts', ($container->privates['translation.dumper.qt'] ?? ($container->privates['translation.dumper.qt'] = new \Symfony\Component\Translation\Dumper\QtFileDumper())));
        $instance->addDumper('csv', ($container->privates['translation.dumper.csv'] ?? ($container->privates['translation.dumper.csv'] = new \Symfony\Component\Translation\Dumper\CsvFileDumper())));
        $instance->addDumper('ini', ($container->privates['translation.dumper.ini'] ?? ($container->privates['translation.dumper.ini'] = new \Symfony\Component\Translation\Dumper\IniFileDumper())));
        $instance->addDumper('json', ($container->privates['translation.dumper.json'] ?? ($container->privates['translation.dumper.json'] = new \Symfony\Component\Translation\Dumper\JsonFileDumper())));
        $instance->addDumper('res', ($container->privates['translation.dumper.res'] ?? ($container->privates['translation.dumper.res'] = new \Symfony\Component\Translation\Dumper\IcuResFileDumper())));

        return $instance;
    }
}
