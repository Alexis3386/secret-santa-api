<?php

namespace ContainerJxHZZaN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_5ixanV5Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.5ixanV5' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.5ixanV5'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'gift' => ['privates', '.errored..service_locator.5ixanV5.App\\Entity\\Gift', NULL, 'Cannot autowire service ".service_locator.5ixanV5": it needs an instance of "App\\Entity\\Gift" but this type has been excluded in "config/services.yaml".'],
            'serializer' => ['privates', 'debug.serializer', 'getDebug_SerializerService', false],
            'validator' => ['privates', 'debug.validator', 'getDebug_ValidatorService', false],
        ], [
            'em' => '?',
            'gift' => 'App\\Entity\\Gift',
            'serializer' => '?',
            'validator' => '?',
        ]);
    }
}
