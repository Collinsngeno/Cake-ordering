<link rel="stylesheet" href="../websources/css/tables.css">
<?php
date_default_timezone_set('Nairobi/Aafrica');
$currentDate = date('F-d-Y');
$currentTime = date("h:i:sA");
header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment;Filename=CHAP_@_". $currentDate ."_TIME_".$currentTime.".doc");
        
?>

<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=Windows-1252">
<title>Download Report</title>


</head>

<body>
<center><FONT color="#000000" size="5" face="Arial, Helvetica, sans-serif">Sales REPORT</FONT></center>
<div class="date_time">
	<BR><FONT color="#000000" size="2" face="Arial, Helvetica, sans-serif">Date Downloaded: <?php echo $currentDate; ?> </font>
	<BR><FONT color="#000000" size="2" face="Arial, Helvetica, sans-serif">Time Downloaded: <?php echo $currentTime; ?> </font>
    <BR><FONT color="#000000" size="2" face="Arial, Helvetica, sans-serif">From: Local Government Unit</font>
	<BR>
  <center>  
    
   <table width="1200" border="0" align="center" cellpadding="0" cellspacing="0">
          <thead>
            <tr bgcolor="#cccccc" style="margin-bottom:10px;">
              		<th width="164"><div align="center">Name</div></th>
					
					<th width="114"><div align="center">Date</div></th>
					
					<th width="113"><div align="center">Amount Paid</div></th>
            </tr>
          </thead>
          <tbody>
         <?php
			   include('db_connect.php');
								
								$a=$_POST['dayfrom'];
								$b=$_POST['dayto'];

								
								$result3 = mysql_query("SELECT * FROM orderdetail where date BETWEEN '$a' AND '$b'");
								
								
								while($row3 = mysql_fetch_array($result3))
								  {
								 echo '<tr>';
								 $dasd=$row3['id'];
								 $result4 = mysql_query("SELECT * FROM orderdetail where id='$dasd'");
								
								
								while($row4 = mysql_fetch_array($result4))
								  {
									echo '<td><div align="center">'.$row4['Cakename'].' '.$row4['Quantity'].'</div></td>';
									}
									
									echo '<td><div align="center">'.$row3['date'].'</div></td>';
									
									echo '<td><div align="center">'.$row3['Total'].'</div></td>';
								 echo '</tr>';
							
								  }
			  
			  ?>
			   <tr>
								<div align="right"></div>
									<td>
									  <div align="center">
									    <?php
include('db_connect.php');	
$a=$_POST['dayfrom'];
$b=$_POST['dayto'];
 
$result1 = mysql_query("SELECT sum(total) FROM orderdetail WHERE date BETWEEN '$a' AND '$b'");
while($row = mysql_fetch_array($result1))
{
    echo"<FONT SIZE='8' COLOR='BLUE'>Total Sales : P". $row['sum(total)'];
 }


?>
	
								  


           </td>
        </tr>    
       
    </tbody>
</table>
 </thead>
</div>
</body>


</html>