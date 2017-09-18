<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = 'cake';
$table = 'pricelist';
$fields_num ="";
$connect= mysqli_connect($mysql_hostname, $mysql_user, $mysql_password);
	if(!$connect){
	die("Could not connect database");
	}
    $db_select= mysqli_select_db($connect,$mysql_database);
	if(!$db_select){
	die("Could not connect database");}

// sending query
$result = mysqli_query($connect,"SELECT * FROM {$table}");
if (!$result) {
    die("Query to show fields from table failed");
$fields_num = mysqli_num_fields($result);
}

echo "<table style='width:80%'
 table border='3' align='center'><tr>";
// printing table headers
for($i=0; $i<$fields_num; $i++)
{
    $field = mysqli_fetch_field($result);
    echo "<td>{$field->name}</td>";
}
echo "</tr>\n";
// printing table rows
while($row = mysqli_fetch_row($result))
{
    echo "<tr>";

    // $row is array... foreach( .. ) puts every element
    // of $row to $cell variable
    foreach($row as $cell)
        echo "<td>$cell</td>";

    echo "</tr>\n";
}
mysqli_free_result($result);
?>
</body></html>