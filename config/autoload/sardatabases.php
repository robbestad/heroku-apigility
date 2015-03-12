<?php
/**
 * SarDatabases Configuration
 *
 * If you have a ./config/autoload/ directory set up for your project, you can
 * drop this config file in it and change the values as you wish.
 */
return array(
    'sardatabases' => array(

        /**
         * Environment
         */

        'environment' => 'development',

        /**
         * Hosts
         */
        'mongo' => array(
            'default' => array(
                'production' => 'mongodb://forecast:txm4VvFhmwdx@dbh44.mongolab.com:27447/uvindex',
                'development' => 'mongodb://forecast:txm4VvFhmwdx@dbh44.mongolab.com:27447/uvindex'
            )
        ),

        /**
         * Mysql Hosts
         */
        'mysql' => array(
            'default' => array(
                'host' => '127.0.0.1',
                'user' => 'sqlmaster',
                'password' => 'tLBewxfCzr37qXJS',
                'database' => 'slank3'
            )
        ),


    ),
    /**
     * End of SarDatabases configuration
     */
);
