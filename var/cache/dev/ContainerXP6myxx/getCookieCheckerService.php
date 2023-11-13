<?php

namespace ContainerXP6myxx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCookieCheckerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'ConnectHolland\CookieConsentBundle\Cookie\CookieChecker' shared autowired service.
     *
     * @return \ConnectHolland\CookieConsentBundle\Cookie\CookieChecker
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'connectholland'.\DIRECTORY_SEPARATOR.'cookie-consent-bundle'.\DIRECTORY_SEPARATOR.'Cookie'.\DIRECTORY_SEPARATOR.'CookieChecker.php';

        return $container->privates['ConnectHolland\\CookieConsentBundle\\Cookie\\CookieChecker'] = new \ConnectHolland\CookieConsentBundle\Cookie\CookieChecker(($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack())->getCurrentRequest());
    }
}
