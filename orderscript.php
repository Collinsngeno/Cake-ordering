
<?php
require_once('db_connect.php');
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$Cakename = $_POST['cakename'];
$Quantity = $_POST['quantity'];
$Price = $_POST['price'];
$Phonenumber = $_POST['phonenumber'];
$Address = $_POST['address'];
$Fullname = $_POST['fullname'];
$Total = $_POST['total'];

if($Phonenumber !=''||$Address !=''){
//Insert Query of SQL
  mysql_query("INSERT INTO cakeorders(orderdate,Cakename,Quantity,Price,Phonenumber,Address,Fullname,Total)values(Now(),'$Cakename','$Quantity','$Price','$Phonenumber', '$Address','$Fullname''$Total')");

	   
 echo "<br/><br/><span>order successful place another!</span>";

}
else{
echo "<p>Order Failed <br/> Some Fields are Blank....!!</p>";
}

}
mysql_close($connect); // Closing Connection with Server

?>
