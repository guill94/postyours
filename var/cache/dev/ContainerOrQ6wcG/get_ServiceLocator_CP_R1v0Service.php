<?php

namespace ContainerOrQ6wcG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CP_R1v0Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.cP.R1v0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.cP.R1v0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'encoder' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
        ], [
            'encoder' => '?',
            'mailer' => '?',
        ]);
    }
}
