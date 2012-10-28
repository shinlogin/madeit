<?php
/**
 * Created by JetBrains PhpStorm.
 * User: shinlogin
 * Date: 10/29/12
 * Time: 3:17 AM
 * To change this template use File | Settings | File Templates.
 */

// module/Backend/config/module.config.php:
return array(
    'controllers' => array(
        'invokables' => array(
            'Backend\Controller\Indices' => 'Album\Controller\IndicesController',
        ),
    ),

    // The following section is new and should be added to your file
    'router' => array(
        'routes' => array(
            'backend' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/backend[/:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Backend\Controller\Indices',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),

    'view_manager' => array(
        'template_path_stack' => array(
            'album' => __DIR__ . '/../view',
        ),
    ),
);