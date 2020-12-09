<?php

namespace ContainerAVBwVu9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSwiftmailer_TransportService extends App_KernelProdContainer
{
    /*
     * Gets the public 'swiftmailer.transport' shared service.
     *
     * @return \Swift_Transport_SpoolTransport
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'swiftmailer'.\DIRECTORY_SEPARATOR.'swiftmailer'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'classes'.\DIRECTORY_SEPARATOR.'Swift'.\DIRECTORY_SEPARATOR.'Transport.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'swiftmailer'.\DIRECTORY_SEPARATOR.'swiftmailer'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'classes'.\DIRECTORY_SEPARATOR.'Swift'.\DIRECTORY_SEPARATOR.'Transport'.\DIRECTORY_SEPARATOR.'SpoolTransport.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'swiftmailer'.\DIRECTORY_SEPARATOR.'swiftmailer'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'classes'.\DIRECTORY_SEPARATOR.'Swift'.\DIRECTORY_SEPARATOR.'Spool.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'swiftmailer'.\DIRECTORY_SEPARATOR.'swiftmailer'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'classes'.\DIRECTORY_SEPARATOR.'Swift'.\DIRECTORY_SEPARATOR.'MemorySpool.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'swiftmailer'.\DIRECTORY_SEPARATOR.'swiftmailer'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'classes'.\DIRECTORY_SEPARATOR.'Swift'.\DIRECTORY_SEPARATOR.'Events'.\DIRECTORY_SEPARATOR.'EventDispatcher.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'swiftmailer'.\DIRECTORY_SEPARATOR.'swiftmailer'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'classes'.\DIRECTORY_SEPARATOR.'Swift'.\DIRECTORY_SEPARATOR.'Events'.\DIRECTORY_SEPARATOR.'SimpleEventDispatcher.php';

        return $container->services['swiftmailer.transport'] = new \Swift_Transport_SpoolTransport(($container->privates['swiftmailer.mailer.default.transport.eventdispatcher'] ?? ($container->privates['swiftmailer.mailer.default.transport.eventdispatcher'] = new \Swift_Events_SimpleEventDispatcher())), new \Swift_MemorySpool());
    }
}