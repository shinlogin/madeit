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
            'Backend\Controller\Indices' => 'Backend\Controller\IndicesController',
        ),
    ),

    // The following section is new and should be added to your file
    'router' => array(
        'routes' => array(
            'backend' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/backend',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Backend\Controller',
                        'controller'    => 'Indices',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),

    'view_manager' => array(
        'template_path_stack' => array(
            'indices' => __DIR__ . '/../view',
        ),
    ),
);