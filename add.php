<?php
/* 
 NEW.PHP
 Allows user to create a new entry in the database
*/
 
 // creates the new record form
 // since this form is used multiple times in this file, I have made it a function that is easily reusable
 function renderForm($Productcode, $Cakename,$Quantity,$Price, $error)
 {
 ?>
 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
 <html>
 <head>
 <title>New Cake</title>
 </head>
 <body>
 <?php 
 // if there are any errors, display them
 if ($error != '')
 {
 echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
 }
 ?> 
 
 <form action="" method="post">
 <div>
 <strong>Productcode: *</strong> <input type="text" name="Productcode" value="<?php echo $Productcode; ?>" /><br/>
 <strong>Cakename: *</strong> <input type="text" name="Cakename" value="<?php echo $Cakename; ?>" /><br/>
 <strong>Quantity: *</strong> <input type="text" name="Quantity" value="<?php echo $Quantity; ?>" /><br/>
 <strong>Price: *</strong> <input type="text" name="Price" value="<?php echo $Price; ?>" /><br/>
 <p>* required</p>
 <input type="submit" name="submit" value="Submit">
 </div>
 </form> 
 </body>
 </html>
 <?php 
 }
 
 
 

 // connect to the database
 include('db_connect.php');
 
 // check if the form has been submitted. If it has, start to process the form and save it to the database
 if (isset($_POST['submit']))
 { 
 // get form data, making sure it is valid
 $Productcode = mysql_real_escape_string(htmlspecialchars($_POST['Productcode']));
 $Cakename = mysql_real_escape_string(htmlspecialchars($_POST['Cakename']));
 $Quantity = mysql_real_escape_string(htmlspecialchars($_POST['Quantity']));
 $Price = mysql_real_escape_string(htmlspecialchars($_POST['Price']));
 // check to make sure both fields are entered
 if ($Productcode == '' || $Cakename == '')
 {
 // generate error message
 $error = 'ERROR: Please fill in all required fields!';
 
 // if either field is blank, display the form again
 renderForm($Productcode, $Cakename,$Quantity,$Price,$error);
 }
 else
 {
 // save the data to the database
 mysql_query("INSERT pricelist SET Productcode='$Productcode', Cakename='$Cakename', Quantity='$Quantity', Price='$Price'")
 or die(mysql_error()); 
 
 // once saved, redirect back to the view page
 header("Location: list.php"); 
 }
 }
 else
 // if the form hasn't been submitted, display the form
 {
 renderForm('$Productcode','$Cakename,','$Quantity','$Price','$error');
 }
?>