<?php
error_reporting(E_ALL ^ E_DEPRECATED);
?>
<?php   
$db_host = "mysqldb.qa.ecom-app.uniphy.uniphytest.com"; 
$db_username = "root";   
$db_pass = "root";  
$db_name = "mystore"; 
 
mysql_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql");
mysql_select_db("$db_name") or die ("no database");              
?>
