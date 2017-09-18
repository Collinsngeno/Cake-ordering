<?php
    $mysql_hostname = "localhost";
	$connect;
    $mysql_user = "root";
    $mysql_password = "";
    $mysql_database = "cake";
    $connect= mysqli_connect($mysql_hostname, $mysql_user, $mysql_password);
	if(!$connect){
	die("Could not connect database");
	}
    $db_select= mysqli_select_db($connect,$mysql_database);
	if(!$db_select){
	die("Could not connect database");}
    ?>