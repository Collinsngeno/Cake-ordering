</script>
<body>
<font color='#000000' size='3' face='Arial'>
<table align="center" border="0" cellspacing="1" width="500" >
<tr><td align="right"><a href="order.php"></a></tr></td>
</table>
<table align="center" border="0" cellspacing="1" width="500" >
<center></center>


<?php
include('db_connect.php');
$date=date("m/d/Y");
$sql= mysql_query("SELECT * from orderdetail WHERE id  ORDER by id DESC limit 1");
while($myrow = mysql_query($sql)){

echo "<tr><td>" . '</tr></td><p align="center"><font color="red" size="2" face="Arial">&nbsp;&nbsp;&nbsp;&nbsp;Date:'. $row['Orderdate'].'</font></p><br><center>Valentine Cake House Official Receipt<br> Hope to See You Again at Valentine cake house
<br><br>expect a phone call after this transaction</center><br> <center><font size="2">If you have any concerns <a href="contactus.php">Post A Comment</a></font></center>' . "</tr></td><tr><td><br><center>Id:  "."" . $row['Id'] . "&nbsp;&nbsp;&nbsp</tr></td><tr><td>
<br><center>Orderid:  " . $row['Orderid']."</tr></td><tr><td><br><center> Productid:  " . $row['Productid']."</tr></td><tr><td><br><center> Quantity:  " . $row['Quantity'].
"</tr></td><tr><td><br><center>Price:  " . $row['Price']." </tr></td><tr><td><br><center>Total:  " . $row['Total']." ";
echo '</tr></td><tr><td></font><br></div></div></div></div></form>
        </div> ';
echo'

<a href="downloadReport.php">Download My Receipt</a></tr></td>';
}

?>