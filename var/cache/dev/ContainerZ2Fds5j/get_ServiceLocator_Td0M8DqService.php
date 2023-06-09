<?php

namespace ContainerZ2Fds5j;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Td0M8DqService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Td0M8Dq' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Td0M8Dq'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'article' => ['privates', '.errored..service_locator.Td0M8Dq.App\\Entity\\Articles', NULL, 'Cannot autowire service ".service_locator.Td0M8Dq": it references class "App\\Entity\\Articles" but no such service exists.'],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'article' => 'App\\Entity\\Articles',
            'manager' => '?',
        ]);
    }
}
