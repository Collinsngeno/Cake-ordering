<CENTER>
<?php
date_default_timezone_set('Africa/Nairobi');
$currentTime = date("h:i:sA");
$currentDate = date('F-d-Y');
header("Content-type: application/vnd.ms-pdf");
header("Content-Disposition: attachment;Filename=". $currentDate ."_TIME_".$currentTime.".doc");
        
?>



<center><FONT color="#000000" size="5" face="Arial, Helvetica, sans-serif">VALENTINE CAKE HOUSE OFFICIAL RECEIPT</FONT></center>
<div class="date_time">
	<BR><FONT color="#000000" size="2" face="Arial, Helvetica, sans-serif">Date Downloaded: <?php echo $currentDate; ?> </font>
   
	<BR>
  <center>  
    <font color='#000000' size='3' face='Arial'>
<table align="center" border="0" cellspacing="1" width="500" >
<tr><td align="right"></tr></td>
</table>
<table align="center" border="0" cellspacing="1" width="500" >
<center></center>


<?php
include('db_connect.php');
$Date=date("m/d/Y");
$result= mysql_query("Select Date,SUM(total)FROM orderdetail GROUP BY DATE");
while($row = mysql_fetch_array($result)){

echo "<tr><td>" . '</tr></td><p align="center"><font color="red" size="2" face="Arial">&nbsp;&nbsp;&nbsp;&nbsp;Date:'. $row['date'].'</font></p><br><center>Hope to See You Again at Reyans Burger Shop<br>Your Official Reciept
<br><br>expect a phone call after this transaction</center><br>'. "</tr></td><tr><td><br> Date:  " . $row['date'] ."</tr></td><tr><td><br> Total:  " . $row['total']."";
echo '</tr></td><tr><td></font><br></div></div></div></div></form>
        </div> ';
echo'</tr></td>';
}



?>
</table>
