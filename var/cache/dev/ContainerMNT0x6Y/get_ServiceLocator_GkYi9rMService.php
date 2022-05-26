<?php

namespace ContainerMNT0x6Y;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GkYi9rMService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.gkYi9rM' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.gkYi9rM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AdminController::adminProductCreate' => ['privates', '.service_locator.UtnQrHU', 'get_ServiceLocator_UtnQrHUService', true],
            'App\\Controller\\AdminController::adminProductDelete' => ['privates', '.service_locator.cMgpYgF', 'get_ServiceLocator_CMgpYgFService', true],
            'App\\Controller\\AdminController::adminProductEdit' => ['privates', '.service_locator.eiWWj8O', 'get_ServiceLocator_EiWWj8OService', true],
            'App\\Controller\\AdminController::index' => ['privates', '.service_locator.JeTwYn4', 'get_ServiceLocator_JeTwYn4Service', true],
            'App\\Controller\\CartController::add' => ['privates', '.service_locator.9OSXp_N', 'get_ServiceLocator_9OSXpNService', true],
            'App\\Controller\\CartController::index' => ['privates', '.service_locator.P7CHHjy', 'get_ServiceLocator_P7CHHjyService', true],
            'App\\Controller\\CartController::remove' => ['privates', '.service_locator.sbvMfph', 'get_ServiceLocator_SbvMfphService', true],
            'App\\Controller\\CartdbController::delete' => ['privates', '.service_locator.IFOP8o9', 'get_ServiceLocator_IFOP8o9Service', true],
            'App\\Controller\\CartdbController::edit' => ['privates', '.service_locator.owPM3gn', 'get_ServiceLocator_OwPM3gnService', true],
            'App\\Controller\\CartdbController::index' => ['privates', '.service_locator.2OyDVsD', 'get_ServiceLocator_2OyDVsDService', true],
            'App\\Controller\\CartdbController::new' => ['privates', '.service_locator.eB5uVBo', 'get_ServiceLocator_EB5uVBoService', true],
            'App\\Controller\\CartdbController::show' => ['privates', '.service_locator.i5P4esE', 'get_ServiceLocator_I5P4esEService', true],
            'App\\Controller\\MailerController::sendEmail' => ['privates', '.service_locator.CpaXrFh', 'get_ServiceLocator_CpaXrFhService', true],
            'App\\Controller\\ProductController::index' => ['privates', '.service_locator.y2D9fmo', 'get_ServiceLocator_Y2D9fmoService', true],
            'App\\Controller\\ProductController::show' => ['privates', '.service_locator.cMgpYgF', 'get_ServiceLocator_CMgpYgFService', true],
            'App\\Controller\\ProductController::showNewProducts' => ['privates', '.service_locator.y2D9fmo', 'get_ServiceLocator_Y2D9fmoService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.XEotb6I', 'get_ServiceLocator_XEotb6IService', true],
            'App\\Controller\\SecurityController::registration' => ['privates', '.service_locator..tt6s91', 'get_ServiceLocator__Tt6s91Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\AdminController:adminProductCreate' => ['privates', '.service_locator.UtnQrHU', 'get_ServiceLocator_UtnQrHUService', true],
            'App\\Controller\\AdminController:adminProductDelete' => ['privates', '.service_locator.cMgpYgF', 'get_ServiceLocator_CMgpYgFService', true],
            'App\\Controller\\AdminController:adminProductEdit' => ['privates', '.service_locator.eiWWj8O', 'get_ServiceLocator_EiWWj8OService', true],
            'App\\Controller\\AdminController:index' => ['privates', '.service_locator.JeTwYn4', 'get_ServiceLocator_JeTwYn4Service', true],
            'App\\Controller\\CartController:add' => ['privates', '.service_locator.9OSXp_N', 'get_ServiceLocator_9OSXpNService', true],
            'App\\Controller\\CartController:index' => ['privates', '.service_locator.P7CHHjy', 'get_ServiceLocator_P7CHHjyService', true],
            'App\\Controller\\CartController:remove' => ['privates', '.service_locator.sbvMfph', 'get_ServiceLocator_SbvMfphService', true],
            'App\\Controller\\CartdbController:delete' => ['privates', '.service_locator.IFOP8o9', 'get_ServiceLocator_IFOP8o9Service', true],
            'App\\Controller\\CartdbController:edit' => ['privates', '.service_locator.owPM3gn', 'get_ServiceLocator_OwPM3gnService', true],
            'App\\Controller\\CartdbController:index' => ['privates', '.service_locator.2OyDVsD', 'get_ServiceLocator_2OyDVsDService', true],
            'App\\Controller\\CartdbController:new' => ['privates', '.service_locator.eB5uVBo', 'get_ServiceLocator_EB5uVBoService', true],
            'App\\Controller\\CartdbController:show' => ['privates', '.service_locator.i5P4esE', 'get_ServiceLocator_I5P4esEService', true],
            'App\\Controller\\MailerController:sendEmail' => ['privates', '.service_locator.CpaXrFh', 'get_ServiceLocator_CpaXrFhService', true],
            'App\\Controller\\ProductController:index' => ['privates', '.service_locator.y2D9fmo', 'get_ServiceLocator_Y2D9fmoService', true],
            'App\\Controller\\ProductController:show' => ['privates', '.service_locator.cMgpYgF', 'get_ServiceLocator_CMgpYgFService', true],
            'App\\Controller\\ProductController:showNewProducts' => ['privates', '.service_locator.y2D9fmo', 'get_ServiceLocator_Y2D9fmoService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.XEotb6I', 'get_ServiceLocator_XEotb6IService', true],
            'App\\Controller\\SecurityController:registration' => ['privates', '.service_locator..tt6s91', 'get_ServiceLocator__Tt6s91Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\AdminController::adminProductCreate' => '?',
            'App\\Controller\\AdminController::adminProductDelete' => '?',
            'App\\Controller\\AdminController::adminProductEdit' => '?',
            'App\\Controller\\AdminController::index' => '?',
            'App\\Controller\\CartController::add' => '?',
            'App\\Controller\\CartController::index' => '?',
            'App\\Controller\\CartController::remove' => '?',
            'App\\Controller\\CartdbController::delete' => '?',
            'App\\Controller\\CartdbController::edit' => '?',
            'App\\Controller\\CartdbController::index' => '?',
            'App\\Controller\\CartdbController::new' => '?',
            'App\\Controller\\CartdbController::show' => '?',
            'App\\Controller\\MailerController::sendEmail' => '?',
            'App\\Controller\\ProductController::index' => '?',
            'App\\Controller\\ProductController::show' => '?',
            'App\\Controller\\ProductController::showNewProducts' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\SecurityController::registration' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\AdminController:adminProductCreate' => '?',
            'App\\Controller\\AdminController:adminProductDelete' => '?',
            'App\\Controller\\AdminController:adminProductEdit' => '?',
            'App\\Controller\\AdminController:index' => '?',
            'App\\Controller\\CartController:add' => '?',
            'App\\Controller\\CartController:index' => '?',
            'App\\Controller\\CartController:remove' => '?',
            'App\\Controller\\CartdbController:delete' => '?',
            'App\\Controller\\CartdbController:edit' => '?',
            'App\\Controller\\CartdbController:index' => '?',
            'App\\Controller\\CartdbController:new' => '?',
            'App\\Controller\\CartdbController:show' => '?',
            'App\\Controller\\MailerController:sendEmail' => '?',
            'App\\Controller\\ProductController:index' => '?',
            'App\\Controller\\ProductController:show' => '?',
            'App\\Controller\\ProductController:showNewProducts' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\SecurityController:registration' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
