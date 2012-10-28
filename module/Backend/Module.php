<?php
/**
 * Created by JetBrains PhpStorm.
 * User: shinlogin
 * Date: 10/29/12
 * Time: 3:15 AM
 * To change this template use File | Settings | File Templates.
 */

// module/Backend/Module.php
namespace Backend;

class Module
{
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\ClassMapAutoloader' => array(
                __DIR__ . '/autoload_classmap.php',
            ),
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }
}