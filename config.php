<?php
return array(
    /**
     * Option to know if debug is enabled or not
     */
    'debug' => true,

    /**
     * Provide your MYSQL database credentials
     */
    'JAWSDB_URL' => 'mysql://oosbex0f6ie0viu2:i4vj1t2w98k4u396@nwhazdrp7hdpd4a4.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306/shsyeerx6fxn2fap',
    'mysql_host' => 'nwhazdrp7hdpd4a4.cbetxkdyhwsb.us-east-1.rds.amazonaws.com',
    'mysql_user' => 'oosbex0f6ie0viu2',
    'mysql_db_name' => 'shsyeerx6fxn2fap',
    'mysql_password' => 'i4vj1t2w98k4u396',

    /**
     * Default language for your application
     */
    'default_language' => "english",

    /**
     * Fallback language in case the translation does not exists
     */
    'fallback_language' => "english",

    /**
     * Application base path
     */
    'base_path' => __DIR__.'/',

    'type' => 'full',

    /**
     * Option to enable https
     */
    'https' => false,

    /**
     * Storage dir
     */
    'storage_dir' => __DIR__.'/app/storage/',

    /**
     * Permissions dir
     */
    'permissions_dir' => __DIR__.'/app/storage/permissions',

    /**
     * Plugins directory
     */
    'plugins_dir' => __DIR__.'/plugins/',

    /**
     * Plugins folder name
     */
    'plugins_folder' => 'plugins',

    /**
     * Themes directory
     */
    'themes_dir' => __DIR__.'/themes/',
    'themes_folder' => 'themes',

    /**
     * Enable bcrpyt for password hashing or other hashing works
     * Please not bcrypt required php 5.3.7 or above
     */
    'bcrypt' => false,

    /**
     * cookie path
     */
    'cookie_path' => '/',

    /*
     * To know that the system is well installed
     */
    'installed' => false,

    /**
     * Supported cache driver are : file or memcache
     */
    'cache-driver' => 'file',

    /**
     * Settings for memcache driver
     */
    'memcache-host' => '127.0.0.1',
    'memcache-port' => '11211',

    /**
     * Months
     */
    'months' => array(
    ),
);