<?php

namespace ContainerGex31iN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OwPM3gnService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.owPM3gn' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.owPM3gn'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cart' => ['privates', '.errored..service_locator.owPM3gn.App\\Entity\\Cart', NULL, 'Cannot autowire service ".service_locator.owPM3gn": it references class "App\\Entity\\Cart" but no such service exists.'],
            'entityManager' => ['privates', '.errored.hiVua91', NULL, 'Cannot determine controller argument for "App\\Controller\\CartdbController::edit()": the $entityManager argument is type-hinted with the non-existent class or interface: "App\\Controller\\EntityManagerInterface". Did you forget to add a use statement?'],
        ], [
            'cart' => 'App\\Entity\\Cart',
            'entityManager' => '?',
        ]);
    }
}