<?php

namespace ContainerOrQ6wcG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GtISqB2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.GtISqB2' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.GtISqB2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'hasher' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
            'userRepo' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'hasher' => '?',
            'userRepo' => 'App\\Repository\\UserRepository',
        ]);
    }
}