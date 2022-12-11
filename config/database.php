<?php

use Illuminate\Support\Str;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for all database work. Of course
    | you may use many connections at once using the Database library.
    |
    */

    'default' => env('DB_CONNECTION', 'mysql'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the database connections setup for your application.
    | Of course, examples of configuring each database platform that is
    | supported by Laravel is shown below to make development simple.
    |
    |
    | All database work in Laravel is done through the PHP PDO facilities
    | so make sure you have the driver for your particular database of
    | choice installed on your machine before you begin development.
    |
    */

    'connections' => [

        'sqlite' => [
            'driver' => 'sqlite',
            'url' => env('DATABASE_URL'),
            'database' => env('DB_DATABASE', database_path('database.sqlite')),
            'prefix' => '',
            'foreign_key_constraints' => env('DB_FOREIGN_KEYS', true),
        ],

        'mysql' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],
        'ditops' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL_DITOPS'),
            'host' => env('DB_HOST_KOMINFO_DITOPS', '127.0.0.1'),
            'port' => env('DB_PORT_KOMINFO_DITOPS', '3306'),
            'database' => env('DB_DATABASE_KOMINFO_DITOPS', 'forge'),
            'username' => env('DB_USERNAME_KOMINFO_DITOPS', 'forge'),
            'password' => env('DB_PASSWORD_KOMINFO_DITOPS', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],
        'edupak' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL_EDUPAK'),
            'host' => env('DB_HOST_KOMINFO_EDUPAK', '127.0.0.1'),
            'port' => env('DB_PORT_KOMINFO_EDUPAK', '3306'),
            'database' => env('DB_DATABASE_KOMINFO_EDUPAK', 'forge'),
            'username' => env('DB_USERNAME_KOMINFO_EDUPAK', 'forge'),
            'password' => env('DB_PASSWORD_KOMINFO_EDUPAK', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],
        'filing' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL_FILING'),
            'host' => env('DB_HOST_KOMINFO_FILING', '127.0.0.1'),
            'port' => env('DB_PORT_KOMINFO_FILING', '3306'),
            'database' => env('DB_DATABASE_KOMINFO_FILING', 'forge'),
            'username' => env('DB_USERNAME_KOMINFO_FILING', 'forge'),
            'password' => env('DB_PASSWORD_KOMINFO_FILING', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],
        'pnbp' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL_PNBP'),
            'host' => env('DB_HOST_KOMINFO_PNBP', '127.0.0.1'),
            'port' => env('DB_PORT_KOMINFO_PNBP', '3306'),
            'database' => env('DB_DATABASE_KOMINFO_PNBP', 'forge'),
            'username' => env('DB_USERNAME_KOMINFO_PNBP', 'forge'),
            'password' => env('DB_PASSWORD_KOMINFO_PNBP', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],
        'siap' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL_SIAP'),
            'host' => env('DB_HOST_KOMINFO_SIAP', '127.0.0.1'),
            'port' => env('DB_PORT_KOMINFO_SIAP', '3306'),
            'database' => env('DB_DATABASE_KOMINFO_SIAP', 'forge'),
            'username' => env('DB_USERNAME_KOMINFO_SIAP', 'forge'),
            'password' => env('DB_PASSWORD_KOMINFO_SIAP', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],
        'siemon' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL_SIEMON'),
            'host' => env('DB_HOST_KOMINFO_SIEMON', '127.0.0.1'),
            'port' => env('DB_PORT_KOMINFO_SIEMON', '3306'),
            'database' => env('DB_DATABASE_KOMINFO_SIEMON', 'forge'),
            'username' => env('DB_USERNAME_KOMINFO_SIEMON', 'forge'),
            'password' => env('DB_PASSWORD_KOMINFO_SIEMON', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],
        'simpeg' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL_SIMPEG'),
            'host' => env('DB_HOST_KOMINFO_SIMPEG', '127.0.0.1'),
            'port' => env('DB_PORT_KOMINFO_SIMPEG', '3306'),
            'database' => env('DB_DATABASE_KOMINFO_SIMPEG', 'forge'),
            'username' => env('DB_USERNAME_KOMINFO_SIMPEG', 'forge'),
            'password' => env('DB_PASSWORD_KOMINFO_SIMPEG', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],
        'staging' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL_STAGING'),
            'host' => env('DB_HOST_KOMINFO_STAGING', '127.0.0.1'),
            'port' => env('DB_PORT_KOMINFO_STAGING', '3306'),
            'database' => env('DB_DATABASE_KOMINFO_STAGING', 'forge'),
            'username' => env('DB_USERNAME_KOMINFO_STAGING', 'forge'),
            'password' => env('DB_PASSWORD_KOMINFO_STAGING', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],
        'staging_dua' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL_STAGING_DUA'),
            'host' => env('DB_HOST_KOMINFO_STAGING_DUA', '127.0.0.1'),
            'port' => env('DB_PORT_KOMINFO_STAGING_DUA', '3306'),
            'database' => env('DB_DATABASE_KOMINFO_STAGING_DUA', 'forge'),
            'username' => env('DB_USERNAME_KOMINFO_STAGING_DUA', 'forge'),
            'password' => env('DB_PASSWORD_KOMINFO_STAGING_DUA', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        'sibakul' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL_SIBAKUL'),
            'host' => env('DB_HOST_SIBAKUL', '127.0.0.1'),
            'port' => env('DB_PORT_SIBAKUL', '3306'),
            'database' => env('DB_DATABASE_SIBAKUL', 'forge'),
            'username' => env('DB_USERNAME_SIBAKUL', 'forge'),
            'password' => env('DB_PASSWORD_SIBAKUL', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => false,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],
        'ditdal' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL_DITDAL'),
            'host' => env('DB_HOST_DITDAL', '127.0.0.1'),
            'port' => env('DB_PORT_DITDAL', '3306'),
            'database' => env('DB_DATABASE_DITDAL', 'forge'),
            'username' => env('DB_USERNAME_DITDAL', 'forge'),
            'password' => env('DB_PASSWORD_DITDAL', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],
        'sdppi' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL_SDPPI'),
            'host' => env('DB_HOST_SDPPI', '127.0.0.1'),
            'port' => env('DB_PORT_SDPPI', '3306'),
            'database' => env('DB_DATABASE_SDPPI', 'forge'),
            'username' => env('DB_USERNAME_SDPPI', 'forge'),
            'password' => env('DB_PASSWORD_SDPPI', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],
        'pgsql' => [
            'driver' => 'pgsql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '5432'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'search_path' => 'public',
            'sslmode' => 'prefer',
        ],

        'sqlsrv' => [
            'driver' => 'sqlsrv',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', '1433'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            // 'encrypt' => env('DB_ENCRYPT', 'yes'),
            // 'trust_server_certificate' => env('DB_TRUST_SERVER_CERTIFICATE', 'false'),
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | your application. Using this information, we can determine which of
    | the migrations on disk haven't actually been run in the database.
    |
    */

    'migrations' => 'migrations',

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis is an open source, fast, and advanced key-value store that also
    | provides a richer body of commands than a typical key-value system
    | such as APC or Memcached. Laravel makes it easy to dig right in.
    |
    */

    'redis' => [

        'client' => env('REDIS_CLIENT', 'phpredis'),

        'options' => [
            'cluster' => env('REDIS_CLUSTER', 'redis'),
            'prefix' => env('REDIS_PREFIX', Str::slug(env('APP_NAME', 'laravel'), '_').'_database_'),
        ],

        'default' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'username' => env('REDIS_USERNAME'),
            'password' => env('REDIS_PASSWORD'),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_DB', '0'),
        ],

        'cache' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'username' => env('REDIS_USERNAME'),
            'password' => env('REDIS_PASSWORD'),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_CACHE_DB', '1'),
        ],

    ],

];
