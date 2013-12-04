<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_con1 = "localhost";
$database_con1 = "lovedata";
$username_con1 = "root";
$password_con1 = "123456789";
$con1 = mysql_pconnect($hostname_con1, $username_con1, $password_con1) or trigger_error(mysql_error(),E_USER_ERROR); 
$result = mysql_query("SET NAMES UTF8");
?>