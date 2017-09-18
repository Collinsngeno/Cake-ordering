<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>View Orders</title>
</head>
<body>
<p><a href='admin.php'>Click here to go back to home<a/><p/>
<?php
$OrderID="";
$ProductId="";
$Cakename="";
$Quantity="";
$Price="";
$Total="";
$Physicaladdress="";
$Phone="";
$Date="";

    // connect to the database
    include('db_connect.php');

    // get results from database
    $result = mysqli_query($connect,"SELECT * FROM orderdetail")
        or die(mysqli_error());
		 
		
        
    // display data in table
    echo "<table style='border:1px solid silver' cellpadding='10px' cellspacing='0px'align='center' border='2' width='80%'>";
    echo "<tr><th>OrderID</th><th>Productid</th><th>Cakename</th><th>Quantity</th><th>Price</th><th>Total</th><th>Physicaladdress</th><th>Phone</th><th>Date</th><th>Mpesareceipt</th></tr>";

    // loop through results of database query, displaying them in the table
    while($row = mysqli_fetch_array( $result )) {
        
        // echo out the contents of each row into a table
        echo "<tr>";
        echo '<td>' . $row['OrderID'] . '</td>';
        echo '<td>' . $row['Productid'] . '</td>';
        echo '<td>' . $row['Cakename'] . '</td>';
        echo '<td>' . $row['Quantity'] . '</td>';
        echo '<td>' . $row['Price'] . '</td>';
        echo '<td>' . $row['Total'] . '</td>';
        echo '<td>' . $row['Physicaladdress'] . '</td>';
        echo '<td>' . $row['Phone'] . '</td>';
         echo '<td>' . $row['Date'] . '</td>';
         echo '<td>' . $row['Mpesareceipt'] . '</td>';
       
        echo '<td><a href="orderdelete.php?Productid=' . $row['Productid'] . '">Delete</a></td>';
        echo "</tr>"; 
    } 

    // close table>
    echo "</table>";
?>

</body>
</html> 