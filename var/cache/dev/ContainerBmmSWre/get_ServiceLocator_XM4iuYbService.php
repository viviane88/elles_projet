<?php

namespace ContainerBmmSWre;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XM4iuYbService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.XM4iuYb' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.XM4iuYb'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'articlesRepository' => ['privates', 'App\\Repository\\ArticlesRepository', 'getArticlesRepositoryService', true],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
        ], [
            'articlesRepository' => 'App\\Repository\\ArticlesRepository',
            'paginator' => '?',
        ]);
    }
}
