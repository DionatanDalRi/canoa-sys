<?php
/**
 * Created by PhpStorm.
 * User: Willian Gustavo Mendo <willianmendo@unochapeco.edu.br>
 * Date: 14/03/16
 * Time: 19:05
 */

return array(
    'controllers' => array(
        'invokables' => array(
        ),

    ),
    'router' => array(
        'routes' => array(
            'interno' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/interno',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Interno\Controller',
                        'controller' => 'Interno',
                        'action' => 'index',
                        'module' => 'interno'
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                        'child_routes' => array(//permite mandar dados pela url
                            'wildcard' => array(
                                'type' => 'Wildcard'
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'Session' => function($sm) {
                return new Zend\Session\Container('Session');
            },
        ),
    ),

    'view_manager' => array(
        'exception_template' => 'error/index',
        'template_map' => array(
            'error/404' => __DIR__ . '/../view/error/404.phtml',
            'layout/layout' => __DIR__ . '/../view/layout/layout.phtml',
        ),
        'template_path_stack' => array(
            'Principal' => __DIR__ . '/../view',
        ),
    ),
);