<?php
 $mysql_hostname = "localhost";
 $mysql_user = "root";
 $mysql_password = "";
$connect = mysql_connect($mysql_hostname, $mysql_user, $mysql_password);
if(! $connect )
{
  die('Could not connect: ' . mysql_error());
}
if(isset($_POST['add'])){ // Fetching variables of the form which travels in URL
$productcode= $_POST['pcode'];
$cakename= $_POST['cname'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];




mysql_query("INSERT INTO pricelist(productcode,cakename,quantity,price)VALUES('$productcode','$cakename','$quantity','$price')");



mysql_select_db('cake');
$retval = mysql_query( $mysql, $connect );

if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
header("location:pricelist.php"); exit(); 
mysql_close($connect);
}




?>