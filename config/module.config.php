<?php

namespace KryuuGallery;

return array(
    'controllers' => array(
        'invokables' => array(
            'KryuuGallery\Controller\KryuuGallery' => 'KryuuGallery\Controller\KryuuGalleryController',
        ),
    ),

    /*
     * Routing Example
     */

    /*
    'router' => array(
        'routes' => array(
            'album' => array(
                'type'    => 'literal',
                'options' => array(
                    'route' => '/album',
                    'defaults' => array(
                        'controller'    => 'album',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'album' => array(
                        'type' => 'literal',
                        'options' => array(
                            'route' => '/',
                            'defaults' => array(
                                'controller' => 'album',
                                'action' => 'index',
                            ),
                        ),
                    ),
                    'add' => array(
                        'type' => 'Zend\Mvc\Router\Http\Segment',
                        'options' => array(
                            'route' => '/add[/:id]',
                            'constraints' => array(
                                'id' => '[0-9]+',
                            ),
                            'defaults' => array(
                                'controller' => 'album/add',
                                'action' => 'add',
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    */

    'doctrine'=> array(
        'driver' => array(
            __NAMESPACE__ . '_driver' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => array(__DIR__ . '/../src/' . __NAMESPACE__ . '/Entity'),
            ),
            'orm_default' => array(
                'drivers' => array(
                    __NAMESPACE__ . '\Entity' => __NAMESPACE__ . '_driver',
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'kryuugallery' => __DIR__ . '/../view',
        ),
    ),
);