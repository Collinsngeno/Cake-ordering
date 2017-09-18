<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="css.css"/>>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Cake prices</title>
</head>

<body>
<!DOCTYPE html>
<html>

<head>
<style>
table, th, td {
   border: 1px solid black;
	
}
th, td {
    padding: 10px;
}
</style>
</head>
<body>

<div class="container">
<table style="width:50%">

<table align="center">
  <tr>
    <th>Cakename</th>
    <th>Price(1/2kg)</th>
    <th>Price(1kg)</th>		
	<th>Price(2kg)</th>		
    <th>Price(3kg)</th>
	<th>Price(4kg)</th>		
    <th>Price(5kg)</th>
	
  </tr>
  <tr>
    <td>Blackforest</td>
    <td>1000</td>	
	<td>1700</td>
    <td>2600</td>	
    <td>3000</td>
	<td>3500</td>	
    <td>4000</td>		
  </tr>
  <tr>
     <td>Red Velvet cake</td>
    <td>1200</td>	
	<td>1800</td>
    <td>2800</td>	
    <td>3900</td>
	<td>4200</td>	
    <td>4500</td>
	
  </tr>
  <tr>
    <td>White forest cake</td>
    <td>1200</td>	
	<td>1800</td>
    <td>2800</td>	
    <td>3200</td>
	<td>3700</td>	
    <td>4000</td>
	
  </tr>
  
  <tr>
    <td>Blueberry</td>
    <td>1400</td>	
	<td>2100</td>
    <td>3000</td>	
    <td>4000</td>
	<td>4600</td>	
    <td>5000</td>
	
  </tr>
  
  <tr>
    <td>Banana cake</td>
    <td>1200</td>	
	<td>2000</td>
    <td>2800</td>	
    <td>3800</td>
	<td>4200</td>	
    <td>4500</td>
	
  </tr>
  
  <tr>
    <td>Chocolate fudge</td>
    <td>1200</td>	
	<td>2000</td>
    <td>2800</td>	
    <td>3900</td>
	<td>4200</td>	
    <td>4500</td>
	
  </tr>
  
   <tr>
    <td>Fruit cake</td>
    <td>1200</td>	
	<td>2000</td>
    <td>3000</td>	
    <td>4000</td>
	<td>4500</td>	
    <td>5000</td>
	
  </tr> 
  <tr>
    <td>Coffee cake</td>
    <td>1200</td>	
	<td>2000</td>
    <td>3000</td>	
    <td>3900</td>
	<td>4500</td>	
    <td>4800</td>
	
  </tr>
  
</table>

<?php

require_once('db_connect.php');
if(isset($_POST['display'])){ // Fetching variables of the form which travels in URL
$Productcode=$_POST['productcode'];
$Cakename=$_POST['cakename'];
$Quantity=$_POST['quantity'];
$Price=$_POST['price'];

$query = "SHOW TABLES FROM db_pricelist".
       "(Productcode,Cakename,Quantity,Price) ".
       "VALUES('$Productcode','$Cakename','$Quantity'','$Price')";
$result=mysql_query($query);
	//$=mysql_fetch_row($query);
	while($row =mysql_fetch_assoc($result)){  
	     //exit;
		 
}

}
?>	 
</body>
</html>

</body>
</html>
