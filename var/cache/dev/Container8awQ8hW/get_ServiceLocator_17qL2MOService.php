<?php

namespace Container8awQ8hW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_17qL2MOService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.17qL2MO' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.17qL2MO'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'jobs' => ['privates', '.errored..service_locator.17qL2MO.App\\Entity\\Jobs', NULL, 'Cannot autowire service ".service_locator.17qL2MO": it references class "App\\Entity\\Jobs" but no such service exists.'],
        ], [
            'jobs' => 'App\\Entity\\Jobs',
        ]);
    }
}
