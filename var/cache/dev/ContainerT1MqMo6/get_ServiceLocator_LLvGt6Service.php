<?php

namespace ContainerT1MqMo6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LLvGt6Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator._LLvGt6' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator._LLvGt6'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'articles' => ['privates', '.errored..service_locator._LLvGt6.App\\Entity\\Articles', NULL, 'Cannot autowire service ".service_locator._LLvGt6": it references class "App\\Entity\\Articles" but no such service exists.'],
        ], [
            'articles' => 'App\\Entity\\Articles',
        ]);
    }
}
