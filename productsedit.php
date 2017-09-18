<?php
 function renderForm($Productcode, $Cakename, $Price,$error)
 {
 ?>
 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
 <html>
 <head>
 <title>Edit Record</title>
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
 <input type="hidden" name="Productcode" value="<?php echo $Productcode; ?>"/>
 <div>
 <p><strong>Productcode:</strong> <?php echo $Productcode; ?></p>
 <strong>Cakename: *</strong> <input type="text" name="Cakename" value="<?php echo $Cakename; ?>"/><br/>
 <strong>Price: *</strong> <input type="text" name="Price" value="<?php echo $Price; ?>"/><br/>
 <p>* Required</p>
 <input type="submit" name="submit" value="Submit">
 </div>
 </form> 
 </body>
 </html> 
 <?php
 }



 // connect to the database
 include('db_connect.php');
 
 // check if the form has been submitted. If it has, process the form and save it to the database
 if (isset($_POST['submit']))
 { 
 // confirm that the 'Productcode' value is a valid integer before getting the form data
 if (is_numeric($_POST['Productcode']))
 {
 // get form data, making sure it is valid
 $Productcode = $_POST['Productcode'];
 $Cakename = mysqli_real_escape_string($connect,htmlspecialchars($_POST['Cakename']));
 $Price = mysqli_real_escape_string($connect,htmlspecialchars($_POST['Price']));
 
 // check that Cakename/Quantity fields are both filled in
 if ($Cakename == '' || $Price== '')
 {
 // generate error message
 $error = 'Error: Please fill in all required fields!';
 
 //error, display form
 renderForm($Productcode, $Cakename,$Price, $error);
 }
 else
 {
 // save the data to the database
 mysqli_query($connect,"UPDATE products SET Productcode='$Productcode',Cakename='$Cakename',Price='$Price' WHERE Productcode='$Productcode'")
 or die(mysqli_error()); 
 
 // once saved, redirect back to the view page
 header("Location: productslist.php"); 
 }
 }
 else
 {
 // if the 'Productcode' isn't valid, display an error
 echo 'error!';
 }
 }
 else
 // if the form hasn't been submitted, get the data from the db and display the form
 {
 
 // get the 'Productcode' value from the URL (if it exists), making sure that it is valid (checing that it is numeric/larger than 0)
 if (isset($_GET['Productcode']) && is_numeric($_GET['Productcode']) && $_GET['Productcode'] > 0)
 {
 // query db
 $Productcode= $_GET['Productcode'];
 $result = mysqli_query($connect,"SELECT * FROM products WHERE Productcode=$Productcode")
 or die(mysqli_error()); 
 $row = mysqli_fetch_array($result);
 
 // check that the 'Productcode' matches up with a row in the database
 if($row)
 {
 
 // get data from db
 $Cakename = $row['Cakename'];
 $Price = $row['Price'];
 
 // show form
 renderForm($Productcode, $Cakename,$Price, '');
 }
 else
 // if no match, display result
 {
 echo "No results!";
 }
 }
 else
 // if the 'Productcode' in the URL isn't valid, or if there is no 'Productcode' value, display an error
 {
 echo 'error!';
 }
 }
?>