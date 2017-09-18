<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>View Records</title>
</head>
<body>
<p><a href='admin.php'>Click here to go back to home<a/><p/>
<?php


	// connect to the database
	include('db_connect.php');

	// get results from database
	$result = mysqli_query($connect,"SELECT * FROM pricelist") 
		or die(mysqli_error());  
		
	// display data in table
	
	echo "<table style='border:1px solid silver' cellpadding='10px' cellspacing='0px'align='center' border='2' width='80%'>";
	echo "<tr> <th>Productcode</th> <th>Cakename</th> <th>Quantity</th> <th>Price</th></tr>";

	// loop through results of database query, displaying them in the table
	while($row = mysqli_fetch_array( $result )) {
		
		// echo out the contents of each row into a table
		echo "<tr>";
		echo '<td>' . $row['Productcode'] . '</td>';
		echo '<td>' . $row['Cakename'] . '</td>';
		echo '<td>' . $row['Quantity'] . '</td>';
		echo '<td>' . $row['Price'] . '</td>';
		echo '<td><a href="edit.php?Productcode=' . $row['Productcode'] . '">Edit</a></td>';
		echo '<td><a href="delete.php?Productcode=' . $row['Productcode'] . '">Delete</a></td>';
		echo "</tr>"; 
	} 

	// close table>
	echo "</table>";
?>
<p><a href="add.php">Add a new cake</a></p>

</body>
</html>	