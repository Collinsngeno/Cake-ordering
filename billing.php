<?php  session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
</html>
</head>
<body bgcolor="#000000">


<?php 
if(isset($_SESSION['cart']) )
{
	
	if(empty($_REQUEST['submit'])){
?>

<div align="center">
<h1 style="color:#FF0">Billing Info</h1>
<table style="padding:20px;" bgcolor='F6F6F6' border="0">
  <tr>
    <td>Name</td>
    <td><form id="form1" name="form1" >
      <label for="name"></label>
      <input type="text" name="name" id="name" pattern="^[a-zA-Z ]*$",$name required="required"/>
    </td>
  </tr>
  <tr>
    <td>Email</td>
    <td><label for="email"></label>
    <input type="text" name="email" id="email" pattern="^[a-zA-Z0-10_.+-]+@[a-zA-Z0-10-]+\.[a-zA-Z0-10-.]+$" required="required"/></td>
  </tr>
  <tr>
    <td>PhysicalAddress</td>
    <td>
      <label for="address"></label>
      <textarea name="address" id="address"  placeholder="2nd floor kemu towers" cols="45" rows="5"required="required"></textarea>
    </td>
  </tr>
  <tr>
    <td>Phone No</td>
    <td><label for="phone"></label>
    <input type="text" name="phone" id="phone" pattern="^[0-9\-\+]{9,15}$" required="required"/></td>
  </tr> 
<tr>
    <td>Mpesa receipt</td>
    <td><label for="Mpesa receipt"></label>
    <input type="text" name="Mpesa receipt" id="Mpesa receipt" required="required"/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="submit" id="submit" value="Submit" /><input type="reset" class="btn btn-large btn-danger"value="Cancel" /></td></form></td>
  </tr>
  <tr>
 <td align='center' colspan='5';><h3 style="color:red">*Please note all payments are to be made in full via<img src="mpesa.jpg"/>to 0725265595*</h3/td>
 </tr>
</table>
</div>



<?php }}
else
	{
		print "<script>";
		print " self.location='product.php';";
		print "</script>";
	}
?>


<?php
if(!empty($_REQUEST['submit']))
{       
 	    $cname=$_REQUEST['name'];
		$email=$_REQUEST['email'];
		$physicaladdress=$_REQUEST['address'];
		$phone=$_REQUEST['phone'];
		$mpesareceipt=$_REQUEST['mpesareceipt'];


		include("db_connect.php");
		$result=mysqli_query($connect,"insert into customers values('','$cname','$email','$physicaladdress','$phone')");
		$customerid=mysqli_insert_id();
		$date=date('Y-m-d');
		$result=mysqli_query($connect,"insert into orders values('','$date','$customerid')");
		$Orderid=mysqli_insert_id();


		
		$total=0;
		foreach($_SESSION['cart'] as $id => $quantity)
			{
			include("db_connect.php");
			$result=mysqli_query($connect,"select Productcode,Cakename,Price from products WHERE Productcode=$id");
			$myrow=mysqli_fetch_array($result);
			$Cakename=$myrow['Cakename'];
			$Price=$myrow['Price'];
			$date=date('Y-m-d');
			$line_cost=$Price*$quantity;
			$total= $total+$line_cost;
      if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
        $physicaladdress=$_POST['physicaladdress'];
         $Phone=$_POST['phone'];
        $Mpesareceipt=$_POST['mpesareceipt'];
    
     }
      
			mysqli_query($connect,"INSERT INTO orderdetail values ('$Orderid','$id','$Cakename','$quantity','$Price','$total','$physicaladdress','$phone','$date','$Mpesareceipt')");
			          
			
}
		
	echo"<span style='color:#fff'>Thank you ".$cname." for placing an order</div>";
	unset($_SESSION['cart']);
		
}
?>
<a href='user.php'>Click here to go back to home<br/><br/>
</body>
</html>