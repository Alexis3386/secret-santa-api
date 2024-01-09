<?php

namespace ContainerLDxIuN5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiLoginControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ApiLoginController' shared autowired service.
     *
     * @return \App\Controller\ApiLoginController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ApiLoginController.php';

        $container->services['App\\Controller\\ApiLoginController'] = $instance = new \App\Controller\ApiLoginController();

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('App\\Controller\\ApiLoginController', $container));

        return $instance;
    }
}
