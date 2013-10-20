<?php
/**
 * MySQL Database Connection
 * mysql_connect('DATABASE_HOST (localhost)', 'DATABASE_USERNAME', 'DATABASE_PASSWORD')
 * mysql_select_db('DATABASE_NAME')
 */
mysql_connect('mysql.online-freehost.cu.cc', 'u233062998_isho9', '121196') or die(mysql_error());
mysql_select_db('u233062998_isho9') or die(mysql_error());
/**
 * Admin Credentials
 */
define('ADMIN', 'admin');
define('PASSWORD', 'password');
?>