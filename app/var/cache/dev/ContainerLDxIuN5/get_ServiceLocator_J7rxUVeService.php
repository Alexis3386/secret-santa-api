<?php

namespace ContainerLDxIuN5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_J7rxUVeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.J7rxUVe' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.J7rxUVe'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'passwordHasher' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
            'serializer' => ['privates', 'debug.serializer', 'getDebug_SerializerService', false],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
            'validator' => ['privates', 'debug.validator', 'getDebug_ValidatorService', false],
        ], [
            'em' => '?',
            'passwordHasher' => '?',
            'serializer' => '?',
            'userRepository' => 'App\\Repository\\UserRepository',
            'validator' => '?',
        ]);
    }
}
