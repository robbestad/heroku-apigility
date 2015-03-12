<?php
/**
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @copyright Copyright (c) 2014 Zend Technologies USA Inc. (http://www.zend.com)
 */

/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

return array(
    'db'=> array(
        'adapters'=>array(
            'slank' => array(
                'driver'         => 'Pdo',
                'dsn'            => 'mysql:dbname=slank3;host=127.0.0.1',
                'driver_options' => array(
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
                ),
                'username' => 'sqlmaster',
                'password' => 'tLBewxfCzr37qXJS',
            ),
            
            'programmingquiz' => array(
                'driver'         => 'Pdo',
                'dsn'            => 'mysql:dbname=quiz;host=127.0.0.1',
                'driver_options' => array(
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
                ),
                'username' => 'sqlmaster',
                'password' => 'tLBewxfCzr37qXJS',
            ),


            'shopadmin' => array(
                'driver'         => 'Pdo',
                'dsn'            => 'pgsql:dbname=shopadmin;host=127.0.0.1',
                'username' => 'svenardo',
                'password' => '123',
            ),
        )
    ),


//    'db' => array(
//        'driver'         => 'Pdo',
//        'dsn'            => 'mysql:dbname=slank3;host=127.0.0.1',
//        'driver_options' => array(
//            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
//        ),
//        'username' => 'sqlmaster',
//        'password' => 'tLBewxfCzr37qXJS',
//    ),
//    'pqdb' => array(
//        'driver'         => 'Pdo',
//        'dsn'            => 'pgsql:dbname=svenardo;host=127.0.0.1',
//        'username' => 'svenardo',
//        'password' => '',
//    ),
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
