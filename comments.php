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
    $result = mysqli_query($connect,"SELECT * FROM comments") 
        or die(mysqli_error());  
        
    // display data in table
    echo "<table style='border:1px solid silver' cellpadding='10px' cellspacing='0px'align='center' border='2' width='80%'>";
    echo "<tr> <th>id</th> <th>fullname</th> <th>email</th> <th>message</th></tr>";

    // loop through results of database query, displaying them in the table
    while($row = mysqli_fetch_array( $result )) {
        
        // echo out the contents of each row into a table
        echo "<tr>";
        echo '<td>' . $row['id'] . '</td>';
        echo '<td>' . $row['fullname'] . '</td>';
        echo '<td>' . $row['email'] . '</td>';
        echo '<td>' . $row['message'] . '</td>';
        echo '<td><a href="commentdel.php?id=' . $row['id'] . '">Delete</a></td>';
        echo "</tr>"; 
    } 

    // close table>
    echo "</table>";
?>

</body>
</html> 