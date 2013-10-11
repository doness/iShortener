<?php
/**
 * MySQL Database Connection
 * mysql_connect('DATABASE_HOST (localhost)', 'DATABASE_USERNAME', 'DATABASE_PASSWORD')
 * mysql_select_db('DATABASE_NAME')
 */
mysql_connect('localhost', 'db_username', 'password') or die(mysql_error());
mysql_select_db('db_name') or die(mysql_error());
/**
 * Admin Credentials
 */
define('ADMIN', 'admin');
define('PASSWORD', 'password');
?>