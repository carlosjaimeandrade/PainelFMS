<?php
define('DB_NAME', 'cld');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');
define('DB_PORT', '3306');

if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');
if ( !defined('BASEURL') )
    define('BASEURL', '/fms/');

if ( !defined('CONNECT') )
    define('CONNECT', ABSPATH . '_inc/connect.php');
if ( !defined('FUNCTIONS') )
    define('FUNCTIONS', ABSPATH . '_inc/function.php');
if ( !defined('CONTROL') )
    define('CONTROL', ABSPATH . '_inc/control.php');
?>