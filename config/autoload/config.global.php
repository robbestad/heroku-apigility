<?php
return array(
    'statuslib' => array(
        'array_mapper_path' => 'data/statuslib.php',
    ),
    'zf-mvc-auth' => array(
        'authentication' => array(),
    ),
    'zf-oauth2' => array(
/*
        'db' => array(
            'dsn_type' => 'PDO',
            'dsn' => 'mysql:host=;dbname=',
            'username' => '',
            'password' => '',
        ),
        'always_issue_new_refresh_token' => true,
        'refresh_token_lifetime' => 1209600,
        'allow_implicit' => true, // default (set to true when you need to support browser-based or mobile apps)
        'access_lifetime' => 7200, // default (set a value in seconds for access tokens lifetime)
        'enforce_state'  => true,  // default
        'storage'        => 'ZF\OAuth2\Adapter\PdoAdapter', // service name for the OAuth2 storage adapter
*/
    ),
    'db'=> array(
/*
        'adapters'=>array(
            'programmingquiz' => array(
                'driver'         => 'Pdo',
                'dsn'            => 'mysql:host=;dbname=',
                'driver_options' => array(
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
                ),
                'username' => '',
                'password' => '',
            ),


        )
*/
    ),
    'service_manager' => array(
        'factories' => array(
            'Zend\Db\Adapter\Adapter'
            => 'Zend\Db\Adapter\AdapterServiceFactory',
        ),
        'abstract_factories' => array(
            'Zend\Db\Adapter\AdapterAbstractServiceFactory',
        )
    ),
);
