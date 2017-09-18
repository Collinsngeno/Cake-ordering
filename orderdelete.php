<?php

 // connect to the database
 include('db_connect.php');
 
 // check if the 'Productid' variable is set in URL, and check that it is valid
 if (isset($_GET['Productid']) && is_numeric($_GET['Productid']))
 {
 // get id value
 $Productid = $_GET['Productid'];
 
 // delete the entry
 $result = mysqli_query($connect,"DELETE FROM Orderdetail WHERE Productid=$Productid")
 or die(mysqli_error()); 
 
 // redirect back to the view page
 header("Location: vieworders.php");
 }
 else
 // if Id isn't set, or isn't valid, redirect back to view page
 {
 header("Location: vieworders.php");
 }
 
?>