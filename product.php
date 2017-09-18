<?php  session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Shopping Cart </title>
<!-- This page is for displaying the products -->
</head>

<body bgcolor="#000000">
<div align="center">
<h3 style="background-color:#FF0">Products</h3>
<a style="color:#FFFF00; text-decoration:none" href="cart.php?action=none" ><span style="margin-left:500px;">
<img src="online/images/cart.png">Cart (<? echo count($_SESSION['cart']); ?>)</span></a>
</br>

<table border="0" bgcolor="#f6f6f6" cellpadding="0px" width="600px">
<?php  
//Fetching the product details from database 
include("db_connect.php");
$result=mysqli_query($connect,"select * from products");
while($myrow=mysqli_fetch_array($result)){
?>

<tr>
<!-- Displaying the shopping cart product -->
<td><b><?=$myrow['Cakename']?></b><br />
       <?=$myrow['Description']?><br />
       Price:<big style="color:#455E5B">
       Sh<?=$myrow['Price']?></big><br /><br />
       <a  href="cart.php?id=<?=$myrow['Productcode']?>&action=add "><img src="add.png"/></a>
</td>
</tr> 
<tr><td colspan="2"><hr size="1" /></td>

<?php }?>
</table>
</div>
</body>
</html>