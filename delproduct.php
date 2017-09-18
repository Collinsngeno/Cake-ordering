<?php
require_once('db_connect.php');
?>
<html>
<head>
<meta name="description" content= Delete
Record" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Delete Pricelist Record</title>
</head>
<body>
<?
$Id=$_GET["Id"];
$query="delete from cakeorders where Id=$Id";
mysql_query($query);
echo "<center>Successfully Deleted</center>";