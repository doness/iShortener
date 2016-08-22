<?php
/**
 * MySQL Database Connection
 * mysql_connect('DATABASE_HOST (localhost)', 'DATABASE_USERNAME', 'DATABASE_PASSWORD')
 * mysql_select_db('DATABASE_NAME')
 */
mysql_connect('localhost', 'root', '') or die(mysql_error());
mysql_select_db('ishort') or die(mysql_error());
/**
 * Admin Credentials
 */
define('ADMIN', 'admin');
define('PASSWORD', 'password');
?>