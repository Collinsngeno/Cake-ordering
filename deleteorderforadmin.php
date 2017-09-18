<?php
$mysql_hostname = "localhost";
$connect = mysql_connect("localhost", "root","") or die("Could not connect database"); // Establishing Connection with Server
$db = mysql_select_db("cake", $connect) or die("Could not select database"); // Selecting Database from Server
if(isset($_POST['delete'])){ // Fetching variables of the form which travels in URL
$ID= $_POST['id'];
//Insert Query of SQL
$query =mysql_query("DELETE FROM cakeorders Where id=65;");

echo "<br/><br/><span>Data deleted successfully...!!</span>";
}
else{
echo "<p>Deletion  Failed <br/></p>";
}

mysql_close($connect); // Closing Connection with Server
?>