<?php

namespace Container8awQ8hW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ElenWPsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ElenWPs' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ElenWPs'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'jobsRepository' => ['privates', 'App\\Repository\\JobsRepository', 'getJobsRepositoryService', true],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
        ], [
            'jobsRepository' => 'App\\Repository\\JobsRepository',
            'paginator' => '?',
        ]);
    }
}
