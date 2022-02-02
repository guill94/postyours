<?php

namespace Container7qBNKcz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDebug_Security_Firewall_Authenticator_Main_InnerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'debug.security.firewall.authenticator.main.inner' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\AuthenticatorManagerListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Firewall'.\DIRECTORY_SEPARATOR.'AuthenticatorManagerListener.php';

        return $container->privates['debug.security.firewall.authenticator.main.inner'] = new \Symfony\Component\Security\Http\Firewall\AuthenticatorManagerListener(($container->privates['security.authenticator.manager.main'] ?? $container->load('getSecurity_Authenticator_Manager_MainService')));
    }
}
