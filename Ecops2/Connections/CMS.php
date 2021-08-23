<?php

# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_CMS = "localhost";
$database_CMS = "cms";
$username_CMS = "root";
$password_CMS = "";
$CMS = mysql_pconnect($hostname_CMS, $username_CMS, $password_CMS) or trigger_error(mysql_error(), E_USER_ERROR);
?>