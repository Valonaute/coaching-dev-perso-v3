<?php

namespace ContainerEqhgxCt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReviewControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ReviewController' shared autowired service.
     *
     * @return \App\Controller\ReviewController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ReviewController.php';

        $container->services['App\\Controller\\ReviewController'] = $instance = new \App\Controller\ReviewController(($container->privates['App\\Repository\\ReviewRepository'] ?? $container->load('getReviewRepositoryService')), ($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()), ($container->privates['App\\Repository\\OrderRepository'] ?? $container->load('getOrderRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.nGeJP64'] ?? $container->load('get_ServiceLocator_NGeJP64Service'))->withContext('App\\Controller\\ReviewController', $container));

        return $instance;
    }
}
