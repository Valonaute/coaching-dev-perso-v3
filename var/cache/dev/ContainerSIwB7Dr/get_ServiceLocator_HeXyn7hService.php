<?php

namespace ContainerSIwB7Dr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HeXyn7hService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.heXyn7h' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.heXyn7h'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'stripeSK' => [$container->getEnv('STRIPE_SK')],
        ], [
            'stripeSK' => '?',
        ]);
    }
}
