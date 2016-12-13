<?php
/**
 * @author mat wright <mat@bstechnologies.com>
 * @copyright Broadshout Technologies SARL
 *
 *
 */
namespace BsLocale;

use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;
use BsLocale\Controller\Plugin\BsLocale;

class Module implements AutoloaderProviderInterface
{


    public function onBootstrap(MvcEvent $e)
    {

        $eventManager = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);

    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__
                )
            )
        );
    }

    public function getServiceConfig()
    {
        return array(
            'factories' => array(

            )
        );
    }

    public function getControllerPluginConfig() {
        return array(
        		'factories' => array(
        				'bs_locale'=>function($sm){
        					return new BsLocale($sm);
        				}
        		)
        );
    }

    public function getViewHelperConfig()
    {
        return array(
            'factories' => array(
        	'bs_locale'=>function($sm){
        	    return new BsLocale\View\Helper\BsLocale($sm);
        	}
        )
        );
    }
}
