<?php

namespace ContainerQWlhr9c;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_G8OhtqpService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.g8Ohtqp' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.g8Ohtqp'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'mailer' => ['services', 'swiftmailer.mailer.default', 'getSwiftmailer_Mailer_DefaultService', true],
        ], [
            'mailer' => '?',
        ]);
    }
}