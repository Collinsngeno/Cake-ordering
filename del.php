<?php

 // connect to the database
 include('db_connect.php');
 
 // check if the 'productcode' variable is set in URL, and check that it is valid
 if (isset($_GET['Productcode']) && is_numeric($_GET['Productcode']))
 {
 // get id value
 $Productcode = $_GET['Productcode'];
 
 // delete the entry
 $result = mysql_query("DELETE FROM pricelist WHERE Productcode=$Productcode")
 or die(mysql_error()); 
 
 // redirect back to the view page
 header("Location: list.php");
 }
 else
 // if productcode isn't set, or isn't valid, redirect back to view page
 {
 header("Location: list.php");
 }
 
?>