
<?php
require_once('db_connect.php');
if(isset($_POST['add'])){ // Fetching variables of the form which travels in URL
$Productcode= $_POST['pcode'];
$Cakename= $_POST['cname'];
$Quantity = $_POST['quantity'];
$Price = $_POST['price'];
//Insert Query of SQL
mysql_query("INSERT INTO pricelist(Productcode,Cakename,Quantity,Price)VALUES('$Productcode','$Cakename','$Quantity','$Price')");

echo "<br/><br/><span>Produuct inserted successfully...!!</span>";
}
else{
echo "<p>Insertion  Failed <br/></p>";
}
