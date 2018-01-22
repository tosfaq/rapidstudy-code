<?php
# настройки
define ('DB_HOST', 'localhost');
define ('DB_LOGIN', 'root');
define ('DB_PASSWORD', 'root');
define ('DB_NAME', 'db');
mysql_connect(DB_HOST, DB_LOGIN, DB_PASSWORD) or die ("MySQL Error: " . mysql_error());
mysql_query("set names utf8") or die ("<br>Invalid query: " . mysql_error());
mysql_select_db(DB_NAME) or die ("<br>Invalid query: " . mysql_error());
?>