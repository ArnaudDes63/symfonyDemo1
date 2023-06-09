<?php

namespace ContainerZ2Fds5j;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_B06L8FmService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.B06L8Fm' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.B06L8Fm'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\BlogController::CreateComment' => ['privates', '.service_locator.Td0M8Dq', 'get_ServiceLocator_Td0M8DqService', true],
            'App\\Controller\\BlogController::form' => ['privates', '.service_locator.dqubTjj', 'get_ServiceLocator_DqubTjjService', true],
            'App\\Controller\\BlogController::index' => ['privates', '.service_locator.FIZbrbw', 'get_ServiceLocator_FIZbrbwService', true],
            'App\\Controller\\BlogController::show' => ['privates', '.service_locator.0GoQWpx', 'get_ServiceLocator_0GoQWpxService', true],
            'App\\Controller\\SecurityController::registration' => ['privates', '.service_locator.fSxEDfC', 'get_ServiceLocator_FSxEDfCService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Controller\\BlogController:CreateComment' => ['privates', '.service_locator.Td0M8Dq', 'get_ServiceLocator_Td0M8DqService', true],
            'App\\Controller\\BlogController:form' => ['privates', '.service_locator.dqubTjj', 'get_ServiceLocator_DqubTjjService', true],
            'App\\Controller\\BlogController:index' => ['privates', '.service_locator.FIZbrbw', 'get_ServiceLocator_FIZbrbwService', true],
            'App\\Controller\\BlogController:show' => ['privates', '.service_locator.0GoQWpx', 'get_ServiceLocator_0GoQWpxService', true],
            'App\\Controller\\SecurityController:registration' => ['privates', '.service_locator.fSxEDfC', 'get_ServiceLocator_FSxEDfCService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
        ], [
            'App\\Controller\\BlogController::CreateComment' => '?',
            'App\\Controller\\BlogController::form' => '?',
            'App\\Controller\\BlogController::index' => '?',
            'App\\Controller\\BlogController::show' => '?',
            'App\\Controller\\SecurityController::registration' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\BlogController:CreateComment' => '?',
            'App\\Controller\\BlogController:form' => '?',
            'App\\Controller\\BlogController:index' => '?',
            'App\\Controller\\BlogController:show' => '?',
            'App\\Controller\\SecurityController:registration' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
