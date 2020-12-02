<?php

namespace ContainerSbxxqui;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KP_9LotService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.kP.9Lot' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.kP.9Lot'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'profilerepository' => ['privates', 'App\\Repository\\ProfileRepository', 'getProfileRepositoryService', true],
        ], [
            'profilerepository' => 'App\\Repository\\ProfileRepository',
        ]);
    }
}
