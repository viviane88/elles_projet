<?php

namespace Container8awQ8hW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdminListUserControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Administrateur\AdminListUserController' shared autowired service.
     *
     * @return \App\Controller\Administrateur\AdminListUserController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'Administrateur'.\DIRECTORY_SEPARATOR.'AdminListUserController.php';

        $container->services['App\\Controller\\Administrateur\\AdminListUserController'] = $instance = new \App\Controller\Administrateur\AdminListUserController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\Administrateur\\AdminListUserController', $container));

        return $instance;
    }
}
