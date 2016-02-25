<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Ecommerce\Controller\Principal'  => 'Ecommerce\Controller\PrincipalController',
        ),

    ),
    'router' => array(
        'routes' => array(
            'principal' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Ecommerce\Controller',
                        'controller' => 'Principal',
                        'action' => 'index',
                        'module' => 'principal'
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

    'doctrine' => array(
        'authentication' => array(
            'orm_default' => array(
                'object_manager' => 'Doctrine\ORM\EntityManager',
                'identity_class' => 'Principal\Model\Usuario',
                'identity_property' => 'login',
                'credential_property' => 'senha',
            ),
        ),
        'driver' => array(
            'application_entities' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => array(__DIR__ . '/../src/Principal/Model')
            ),
            'orm_default' => array(
                'drivers' => array(
                    'Principal\Model' => 'application_entities'
                )
            ))),
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