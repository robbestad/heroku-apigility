<?php
return array(
    'router' => array(
        'routes' => array(
            'quiz.rest.programmingquiz' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/programmingquiz[/:programmingquiz_id]',
                    'defaults' => array(
                        'controller' => 'quiz\\V1\\Rest\\Programmingquiz\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'quiz.rest.programmingquiz',
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'quiz\\V1\\Rest\\Programmingquiz\\ProgrammingquizResource' => 'quiz\\V1\\Rest\\Programmingquiz\\ProgrammingquizResourceFactory',
        ),
    ),
    'zf-rest' => array(
        'quiz\\V1\\Rest\\Programmingquiz\\Controller' => array(
            'listener' => 'quiz\\V1\\Rest\\Programmingquiz\\ProgrammingquizResource',
            'route_name' => 'quiz.rest.programmingquiz',
            'route_identifier_name' => 'programmingquiz_id',
            'collection_name' => 'programmingquiz',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'quiz\\V1\\Rest\\Programmingquiz\\ProgrammingquizEntity',
            'collection_class' => 'quiz\\V1\\Rest\\Programmingquiz\\ProgrammingquizCollection',
            'service_name' => 'programmingquiz',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'quiz\\V1\\Rest\\Programmingquiz\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'quiz\\V1\\Rest\\Programmingquiz\\Controller' => array(
                0 => 'application/vnd.quiz.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'quiz\\V1\\Rest\\Programmingquiz\\Controller' => array(
                0 => 'application/vnd.quiz.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'quiz\\V1\\Rest\\Programmingquiz\\ProgrammingquizEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'quiz.rest.programmingquiz',
                'route_identifier_name' => 'programmingquiz_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ObjectProperty',
            ),
            'quiz\\V1\\Rest\\Programmingquiz\\ProgrammingquizCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'quiz.rest.programmingquiz',
                'route_identifier_name' => 'programmingquiz_id',
                'is_collection' => true,
            ),
        ),
    ),
);
