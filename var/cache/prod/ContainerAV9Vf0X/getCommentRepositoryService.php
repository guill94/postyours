<?php

namespace ContainerAV9Vf0X;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCommentRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\CommentRepository' shared autowired service.
     *
     * @return \App\Repository\CommentRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\CommentRepository'] = new \App\Repository\CommentRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
